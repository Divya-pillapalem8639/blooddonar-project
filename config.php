<?php
$host = "blooddonor.crccyc4wo47u.ap-south-1.rds.amazonaws.com";
$user = "admin";
$password = "pillapalem";
$database = "blooddonor";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>
