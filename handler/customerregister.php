<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require "../partials/connect.php";

$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$captcha=$_POST['captcha'];

if($captcha != $_SESSION['captcha'])
{
    DisplayMessage('Captcha did not match!');
}
else if(UserExists())
{
    DisplayMessage('This email has already been registered');
}
else if($password==$password2)
{
    //Encrypts password
    $passwordHash=password_hash($password,PASSWORD_DEFAULT);
    $passwordHash = mysqli_real_escape_string($connect, $passwordHash);
    $email = mysqli_real_escape_string($connect, $email);
    $sql="INSERT INTO customers(username,password) VALUES('$email','$passwordHash')";
    mysqli_query($connect, $sql);
    DisplayMessage('Registration has been successful!');
}
else
{
    DisplayMessage('Password did not match!','');
}

function UserExists()
{
    require "../partials/connect.php";
    $email=$_POST['email'];
    $email = mysqli_real_escape_string($connect, $email);
    $sql = "SELECT username FROM customers WHERE username='$email'";
    try
    {
        $results = mysqli_query($connect, $sql);
        $final=$results->fetch_assoc();
        
        if($final == 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
}

function DisplayMessage($msg)
{
    echo "<script> alert('$msg'); window.location.href='../customerforms.php'; </script>";
}
?>