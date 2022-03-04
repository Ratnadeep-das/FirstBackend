<?php
include_once('conn.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
$validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

function validateCredentials($key,$data){
    if(empty($data)){
            header(`Location:http://localhost/auth/register.php?error=$key is empty`);
            exit();
    }
    else
    {
    return;
    }
}
function validateEmail($validEmail,$email)
 { if (!preg_match($validEmail,$email)) {
    echo "\n Invalid Email";
    exit();
  }
  else{
    return;
  }
}
function matchPassword($password,$confirmPassword){
    if($password != $confirmPassword){
        header(`Location:http://localhost/auth/register.php?error=password and confirm password does not match`);
        exit();
    }
    else
    {return;
    }
}

function checkUserExit($email){

global $db;
$query = "select * from user where email = '$email'";
$sql = mysqli_query($db,$query);
$rows = mysqli_num_rows($sql);

if($rows==1){
    header("Location:http://localhost/auth/register.php?error=Email Already Exist");
    exit();
}
return;
}


function registerUser($email,$name,$password){
    global $db;
    $query = "insert into user (email,name,password) values('$email','$name','$password')";
    $sql = mysqli_query($db,$query);
    if($sql->error){
        header("Location:http://localhost/auth/register.php?error=Please Try again");
        exit();
    }else{
        header("Location:http://localhost/auth/login.php?message=User Successfully Registered");
        exit();
    }
    

}
    validateEmail($validEmail,$email);  
    validateCredentials("email",$email);
    validateCredentials("password", $password);
    validateCredentials("name", $name);
    validateCredentials("confirmPassword", $confirmPassword);
    




matchPassword($password,$confirmPassword);
checkUserExit($email);
registerUser($email,$name,$password);


}

?>