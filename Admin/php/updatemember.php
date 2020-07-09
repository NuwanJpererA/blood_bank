<?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

if (isset($_POST['btnadd']))
{
    $memid = $_POST["memid"];
    $name = $_POST["name"];
    $id = $_POST["id"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $tp = $_POST["tp"];
    $city = $_POST["city"];
    $address = $_POST["address"];


    
    $reg = "UPDATE `member` SET name='$name',idnumber='$id',email='$email',dob='$dob',gender='$gender',tp='$tp',city='$city',address='$address' WHERE id='$memid'";
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

