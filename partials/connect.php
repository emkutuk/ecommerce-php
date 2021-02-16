<?php
$host="";
$user="";
$password="";
$dbname="";

$connect=mysqli_connect($host,$user,$password,$dbname);

if ($connect->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
?>