<?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

if (isset($_POST['submit']))
{
   
    $name = $_POST["name"];
    $id = $_POST["id"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $tp = $_POST["tp"];
    $city = $_POST["city"];
    $address = $_POST["address"];


    
    $reg = "INSERT INTO `member` (name,idnumber,email,dob,gender,tp,city,address) VALUES ('$name', '$id', '$email', '$dob', '$gender', '$tp', '$city', '$address') ";
    $reg_result = mysqli_query($conn,$reg);
    
    if($reg_result==true)
    {
        header("location:../memberdetails.php?true");
    }
    else
    {
        header("location:../memberdetails.php?false");
    }
    

}

?>