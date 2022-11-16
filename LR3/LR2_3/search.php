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

//$stmt = $pdo->prepare("SELECT guards.id, guards.photo_path, guards.full_name, guards.bio, guards.year_of_birth, posts.building FROM guards INNER JOIN posts on guards.id_post=posts.id");

//$stmt->execute();
//$guards = $stmt->fetchAll();

$sql = "SELECT guards.id, guards.photo_path, guards.full_name, guards.bio, guards.year_of_birth, posts.building 
        FROM guards 
        JOIN posts ON guards.id_post=posts.id";

$arr_binds = [];

// var_dump($_GET);

// $full_name = $_GET['full_name'];
// $description = $_GET['description'];
// $year_of_birth = $_GET['year_of_birth'];
// $building = $_GET['building'];

$flag = false;


if (!key_exists('clear_filter', $_GET)) 
{
    if (count($_GET) > 0) 
    {
        $sql .= " WHERE ";
        if ($_GET['full_name'])
        {
            $sql .= " guards.full_name LIKE  CONCAT( '%', :full_name, '%')";
            //$sql .= " guards.full_name LIKE '%$full_name%' ";
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
        }
        if ($_GET['bio']) 
        {
            if ($flag) 
            {
                $sql .= " AND ";
            }
            // print_r($flag);
            $sql .= " guards.bio LIKE  CONCAT( '%', :bio, '%')";
            $arr_binds['bio'] = htmlspecialchars($_GET['bio']);
            // print_r($_GET['description']);
        }
        if ($_GET['building']) 
        {
            if ($flag) 
            {
                $sql .= " AND ";
            }
            $sql .= " posts.building LIKE  CONCAT( '%', :building, '%')";
            $arr_binds['building'] = htmlspecialchars($_GET['building']);
            print_r($_GET['building']);
        }
    }
    
}

$sql .= ";";
print_r($sql);

$stmt = $pdo->prepare($sql);
// if (!key_exists('clear_filter', $_GET))
// {
//     if (count($_GET) > 0) 
//     {
//         $full_name = $_GET['full_name'];
//         $stmt->bindParam(':full_name', $full_name);
//     }
// }
// $stmt->bindParam(':description', $description, PDO::PARAM_STR, 255);
// $stmt->bindParam(':year_of_birth', $year_of_birth, PDO::PARAM_INT);
// $stmt->bindParam(':building', $building, PDO::PARAM_STR, 45);

// print_r(:full_name);

// $stmt->debugDumpParams();


// $stmt->execute();
$stmt->execute($arr_binds);

// print_r($stmt);

 $guards = $stmt->fetchAll();
//$guards = $result->fetchAll();



?>