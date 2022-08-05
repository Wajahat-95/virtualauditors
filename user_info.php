<?php
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);

if($con){
    echo "connection successful";
}
else{
    echo "connection failed";
}
?>