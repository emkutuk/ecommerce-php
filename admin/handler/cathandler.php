<?php
require "../../partials/connect.php";

//It gets the category an adds it to categories table
if(isset($_POST['categoryadd']))
{
    $category=$_POST['name'];

    try
    {
        $sql="INSERT INTO categories(name) VALUES ('$category')";
        $connect->query($sql);

        header('location: ../productsshow.php');
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
}
?>