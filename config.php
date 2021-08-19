<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "diary";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die("<script> alert('Connection Failed')</script>");
}

?>