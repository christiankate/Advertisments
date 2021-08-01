<?php
$server="localhost";
$username="root";
$password="";
$db="art";

$conn= new mysqli($server,$username,$password,$db);
if($conn->connect_error)
{
die("connection failed!".connect_error);
}

?>