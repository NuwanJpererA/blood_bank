<?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

if (isset($_POST['submit']))
{
   
    $name = $_POST["name"];
    $idcard = $_POST["idcard"];
    $slmc = $_POST["slmc"];
    $email = $_POST["email"];
    $tp = $_POST["tp"];


    
    $reg = "INSERT INTO `doctordetails` (name,idcard,slmc,email,tp) VALUES ('$name', '$idcard', '$slmc', '$email', '$tp') ";
    $reg_result = mysqli_query($conn,$reg);
    
    if($reg_result==true)
    {
        header("location:../Doctor-details.php?true");
    }
    else
    {
        header("location:../Doctor-details.php?false");
    }
    

}

?>