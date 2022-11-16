<?php

$connect = new mysqli("localhost","root","","guards_info");
if (!$connect) 
{
	die('Database error');
}