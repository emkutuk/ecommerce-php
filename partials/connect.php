<?php

$host="localhost";
$user="root";
$password="";
$dbname="phpstore";

try
{
    $connect=mysqli_connect($host,$user,$password,$dbname);
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>