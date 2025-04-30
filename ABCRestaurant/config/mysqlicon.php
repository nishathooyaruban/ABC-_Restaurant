<?php
$servername="localhost";
$username="root";
$password="";
$database="abcrestaurant";
//DB Connection via MYSQLI
$con=mysqli_connect('localhost','root','','abcrestaurant');
//check connection
if(!$con){
die("connection failed:".mysqli_connect_error());
}
?>