<?php 
$hostname = "localhost";
$dbusers = "root";
$dbpassword = "";
$dbName = "login_register";
$conn = mysqli_connect($hostname,$dbusers,$dbpassword,$dbName);
if(!$conn){
    die("something went wrong:");
}
?>