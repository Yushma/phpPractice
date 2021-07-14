<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db = "practice";

$con = mysqli_connect($server_name,$user_name,$password,$db);
if(!$con){
    die("Connection not establisted".mysqli_error());
}

?>