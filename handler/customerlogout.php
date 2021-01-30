<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//It closes the session and clear cache
session_destroy();
clearstatcache();

//Redirecting user to the main page
header('location: ../index.php');
?>