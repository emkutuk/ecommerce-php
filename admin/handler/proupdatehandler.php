<?php 
include("../partials/connect.php");

if(isset($_POST['update']))
{
    $newid=$_POST['form_id'];    
    $newname=$_POST['productName'];
    $newprice=$_POST['productPrice'];
    $newdescription=$_POST['productDescription'];
    $newcategory=$_POST['productCategory'];
    
    $target="uploads/";
    $file_path=$target.basename($_FILES['productImage']['name']);
    $file_name=$_FILES['productImage']['name'];
    $file_tmp=$_FILES['productImage']['tmp_name'];
    $file_store="../uploads/".$file_name;

    move_uploaded_file($file_tmp, $file_store);

    $productInfo = [$newid, $newname, $newprice, $newdescription, $newcategory];
    
    foreach($productInfo as $info)
    {
        $info = mysqli_real_escape_string($connect, $info);
    }

    $sql="UPDATE products SET name='$newname', price='$newprice', description='$newdescription', category_id='$newcategory', picture='$file_path' WHERE id='$newid'";

    if(mysqli_query($connect,$sql))
    {
        header('location: productsshow.php');
    }
    else
    {
        header('location: adminindex.php');
    }
}
?>