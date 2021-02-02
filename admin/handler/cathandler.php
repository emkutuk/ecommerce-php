<?php
require "../../partials/connect.php";

//It gets the category an adds it to categories table
if(isset($_POST['categoryadd']))
{
    $category=$_POST['name'];

    try
    {
        $category = mysqli_real_escape_string($connect, $category);
        $sql="INSERT INTO categories(name) VALUES ('$category')";
        mysqli_query($connect, $sql);

        header('location: ../productsshow.php');
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
}
?>