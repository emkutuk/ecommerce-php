<?php
require "../partials/connect.php";

if (isset($_POST['Login'])) 
{
    //During this part I do not encrypt password because admin accounts are registered manually by me
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username='$email' AND password='$password'";

    try
    {
        $results = $connect->query($sql);
        $final = $results->fetch_assoc();
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }

    if ($email == $final['username'] && $password == $final['password']) 
    {
        $_SESSION['adminemail'] = $final['username'];
        $_SESSION['adminpassword'] = $final['password'];

        header('location: adminindex.php');
    } 
    else 
    {
        header('location: adminlogin.php');
    }
}
?>