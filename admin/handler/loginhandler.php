<?php
require "../../partials/connect.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['adminlogin'])) 
{
    //During this part I do not encrypt password because admin accounts are registered manually by me
    $email = $_POST['adminemail'];
    $password = $_POST['adminpassword'];

    $email = mysqli_real_escape_string($connect, $email);
    $password  = mysqli_real_escape_string($connect, $password);

    $sql = "SELECT * FROM admins WHERE username='$email' AND password='$password'";

    try
    {
        $results = mysqli_query($connect, $sql);
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

        header('location: ../adminindex.php');
    } 
    else 
    {
        header('location: ../adminlogin.php');
    }
}
?>