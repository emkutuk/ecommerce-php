<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_POST['login'])) 
{
  include("../partials/connect.php");

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM customers WHERE username='$email'";

  $results = $connect->query($sql);
  $final = $results->fetch_assoc();

  if($email == $final['username'] && password_verify($password, $final['password'])) 
  {
    $_SESSION['email'] = $final['username'];
    $_SESSION['password'] = $final['password'];

    echo "<script>alert('Welcome back!'); window.location.href='../index.php';</script>";
    
  } 
  else 
  {
    echo "<script>alert('Wrong username or password. Please try again!'); window.location.href='../customerforms.php';</script>";
  }
}
?>