<?php
require ("constants.php");

// 1. create database connection
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
if(!$connection){
    die("database connection failed: " . mysqli_error());
}

// 2. select a database to use
$db_select = mysqli_select_db($connection, DB_NAME);
if (!$db_select){
    die("database selection failed: " . mysqli_error());
}
?>