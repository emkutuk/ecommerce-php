<?php
require "../../partials/connect.php";

if(isset($_POST['addproduct']))
{
    $productName=$_POST['productName'];
    $productPrice=$_POST['productPrice'];
    $productDescription=$_POST['productDescription'];
    $productCategory=$_POST['productCategory'];

    $target="uploads/";
    $file_path=$target.basename($_FILES['productImage']['name']);
    $file_name=$_FILES['productImage']['name'];
    $file_tmp=$_FILES['productImage']['tmp_name'];
    $file_store="../uploads/".$file_name;

    move_uploaded_file($file_tmp, $file_store);

    $productInfo = [$productName, $productPrice, $productDescription, $productCategory];

    foreach($productInfo as $info)
    {
        $info = mysqli_real_escape_string($connect, $info);
    }

    try
    {
        $sql="INSERT INTO products(name,price,picture,description,category_id) VALUES ('$productName', '$productPrice', '$file_path', '$productDescription', '$productCategory')";
        mysqli_query($connect, $sql);

        header('location: ../productsshow.php');
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
}

?>