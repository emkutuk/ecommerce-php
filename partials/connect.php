<?php
$host="localhost";
$user="u9902570_emrephp";
$password="emrephp";
$dbname="u9902570_phpsite";

$connect=mysqli_connect($host,$user,$password,$dbname);

if ($connect->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
?>