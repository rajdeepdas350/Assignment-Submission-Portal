<?php
session_start();
if($_SESSION['loggedin']==false){
    header("location: ../PHP/login.php");
    die();
}
?>