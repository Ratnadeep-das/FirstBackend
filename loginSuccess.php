<?php
include_once('conn.php');
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){

$email = $_POST['email'];
$password = $_POST['password'];

    if(empty($email)){
        header("Location:http://localhost/auth/login.php?error=Email Address is required");
        exit();
}
    if(empty($password)){
      header("Location:http://localhost/auth/login.php?error=Password is required");
      exit();

    }
   $sql = "SELECT email from user WHERE email = '$email' and password = '$password'";
$query = mysqli_query($db,$sql);
$rows = mysqli_num_rows($query);

if($rows>=1){
    $_SESSION['password'] = $password;
  $_SESSION['email'] = $email;
  
   header('Location: http://localhost/auth/home.php');
   exit();
   
  
   
}
else{
      header("Location:http://localhost/auth/login.php?error=Invalide Credentials");
      exit();
}
 
}




?>