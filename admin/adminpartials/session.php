<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//It redirects user to login page if he/she is not logged in
if(empty($_SESSION['adminemail'] AND $_SESSION['adminpassword']))
{
    header('location: adminlogin.php');
}

?>