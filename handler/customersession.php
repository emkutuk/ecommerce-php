<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//If user is not logged in, displays an error message and redirects user to user registration page
if(!isset($_SESSION['email']) || !isset($_SESSION['password']))
{
    echo "<script> alert('You cant buy an item without logging in!'); window.location.href='customerforms.php';</script>";
}

?>