<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';
require '../partials/connect.php';

if(isset($_POST['reset']))
{

    $email=$_POST['email'];    

    if(UserExists())
    {
        $token = md5($email); 

        $sql="INSERT INTO tokens(username,token) VALUES('$email','$token')";
        $connect->query($sql);
            
        //This will be changed later
        $link = "localhost/ecommerce-php/resetpass.php?token=$token";

        $mail = new PHPMailer();
        $mail->isSMTP();

        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;

        $mail->Username = 'info.644851inholland@gmail.com';
        $mail->Password = 'emreemre';
        $mail->setFrom('info.644851inholland@gmail.com', 'Emre Kutuk');

        $mail->addAddress($email);
        $mail->Subject = 'Password Reset Request';
        $mail->Body    = "Please click <a href=".$link.">here</a> to reset your password.";
        $mail->AltBody = 'Please click the link to reset your password. Link: $link';

        //echo $link;
        $mail->send();
        echo "<script> alert('We have sent you the password reset link.'); window.location.href='../index.php'; </script>";
        }
        else
        {
            DisplayMessage('This user does not exist.');
        }
    }

if(isset($_POST['approvepassword']))
{
    $email=$_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $token = $_POST['token'];

    if($password == $password2)
    {
        try
        {
            $passwordHash=password_hash($password,PASSWORD_DEFAULT);
            $sql="UPDATE customers SET password='$passwordHash' WHERE username='$email'";
            mysqli_query($connect,$sql);

            $sql="DELETE FROM tokens WHERE username='$email'";
            mysqli_query($connect,$sql);
            
            echo "<script> alert('Password has succesfully been changed.'); window.location.href='customerlogout.php'; </script>";
        }
        catch(Exception $e)
        {
            echo "<script> alert('There has been an error.'.$e) </script>";
        }
        
    }
    else
    {
        //Passwords don't match, user is redirected to the same page 
        header("location: ../resetpass.php?token=$token");
    }
}

function DisplayMessage($msg)
{
    echo "<script> alert('$msg'); window.location.href='../forgotpass.php'; </script>";
}

function UserExists()
{
    include("../partials/connect.php");
    $email=$_POST['email'];

    $sql = "SELECT username FROM customers WHERE username='$email'";

    $results = $connect->query($sql);
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
?>