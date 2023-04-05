<?php
$severname="localhost";
$username="root";
$password="";
$database= "obnews";

$conn= new mysqli( $severname,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
echo "connection success";
?>