<?php
session_start();

$img = $_GET['img'];

if (!isset($_SESSION['email']))
{
    header('Location: ../LR3/login.php');
}
else
{
	header('Content-Type: image/png');
	readfile($img);
}
?>