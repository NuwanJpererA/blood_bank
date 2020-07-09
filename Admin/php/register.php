<?php

session_start();
// header("location:../index.php");

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

$username = $_POST["username"];
$password1 = $_POST["password1"];
$password2 = $_POST["password2"];

if($password1 == $password2){
    $password = $password1;

    $query = "SELECT * FROM admins WHERE  username='$username' ";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);

    if($num==1){
        header("location:../index.php?false");
    } else{
        $signup = "INSERT INTO admins(username,password) VALUES ('$username', '$password') ";
        mysqli_query($conn, $signup);
        header("location:../index.php?true");

    }
} else{
    header("location:../index.php?false");
}

