<?php
$servername="localhost";
$username="root";
$password="";
$dbname="auth";


//connection
$db= new mysqli($servername, $username, $password, $dbname);

//check conn
if($db==false){
    echo "connection failed";
}

else {
    echo "done";
}
error_reporting(0);

?>