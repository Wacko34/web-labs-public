<?php
global $pdo;
try {
    $pdo = new PDO("mysql:host=localhost;dbname=guards_info", "root", "");
}
catch (PDOException $e) {
    //echo "Database error: " . $e->getMessage();

    echo $e->getMessage();
	die;
}

$sql = "SELECT guards.id, guards.photo_path, guards.full_name, guards.bio, guards.year_of_birth, posts.building 
        FROM guards 
        JOIN posts ON guards.id_post=posts.id";

$arr_binds = [];

$flag = false;

if (key_exists('clear_filter', $_GET)) 
{
    $_GET = array();
}

// print_r($_GET);

if (!key_exists('clear_filter', $_GET)) 
{
    if (count($_GET) > 0) 
    {
        $sql .= " WHERE ";
        if ($_GET['full_name'])
        {
            $sql .= " guards.full_name LIKE  CONCAT( '%', :full_name, '%')";
            $arr_binds['full_name'] = htmlspecialchars($_GET['full_name']);
            $flag = true;
        }
        if ($_GET['year_of_birth']) 
        {
            if ($flag) 
            {
                $sql .= " AND ";
            }
            $sql .= " guards.year_of_birth = :year_of_birth";
            $arr_binds['year_of_birth'] = htmlspecialchars($_GET['year_of_birth']);
            $flag = true;
        }
        if ($_GET['bio']) 
        {
            if ($flag) 
            {
                $sql .= " AND ";
            }
            $sql .= " guards.bio LIKE  CONCAT( '%', :bio, '%')";
            $arr_binds['bio'] = htmlspecialchars($_GET['bio']);
            $flag = true;
        }
        if ($_GET['building']) 
        {
            if ($flag) 
            {
                $sql .= " AND ";

            }
            // print_r($_GET['building']);
            $sql .= " posts.building LIKE  CONCAT( '%', :building, '%')";
            $arr_binds['building'] = htmlspecialchars($_GET['building']);
            $flag = true;
        }
    }
    
}

$sql .= ";";
// print_r($sql);

$stmt = $pdo->prepare($sql);

if (!key_exists('clear_filter', $_GET)) 
{
    $stmt->execute($arr_binds);
}

$guards = $stmt->fetchAll();
?>