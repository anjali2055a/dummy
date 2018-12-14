<?php
//setting the variables for connection
$host="localhost";
$db="scthirda";
$pass="";
$user="root";
//making connection
$conn=mysqli_connect($host,$user ,$pass,$db)or die("datbase connection error!"); //parameter should be in sequence db=database

?>