<?php

session_start();

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM admins WHERE  username='$username' && password='$password' ";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);

if($num==1){ 
   header("location:../index.php");
} else{
   header("location:../adminLogin.php") ;
}

?>