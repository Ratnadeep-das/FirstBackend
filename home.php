<?php
session_start();
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}
else{
    header('Location:http://localhost/auth/login.php');
}

if(isset($_POST['submit'])){
    session_destroy();
    header('Location:http://localhost/auth/login.php?message=Successfully Logout');
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <Button type="submit" name = "submit" >LOGOUT </Button>
    </form>
    <h2><?php  echo $email?></h2>
    
</body>
</html>