<?php
$server_username = "root"; 
$server_password = ""; 
$server_host = "localhost"; 
$database = 'todolist'; 
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("Can't connect database");
mysqli_query($conn,"SET NAMES 'UTF8'");
?>