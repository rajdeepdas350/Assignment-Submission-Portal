<?php

$server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "5th_sem_miniproject";

$conn = mysqli_connect($server, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection Failed :(");
} 

?>