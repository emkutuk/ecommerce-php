<?php

session_start();
session_destroy();

clearstatcache();
header('location: ../adminlogin.php');
?>