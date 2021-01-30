<?php
require "../partials/connect.php";

try
{
    //It deletes the product with directed id
    $newid=$_GET['del_id'];
    $sql="DELETE FROM products WHERE id='$newid'";

    mysqli_query($connect,$sql);
    header('location: productsshow.php');
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>