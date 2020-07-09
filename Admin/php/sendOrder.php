<?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

if (isset($_POST['submit']))
{
    $id=$_POST["id"];
    
    
/*mail code*/
$mail = $_POST['email'];
    
$subject = "request completed";
$message .= "You blood oder send";

$headers = "From: $mail";
$headers .= "Blood Bank";

mail($mail, $subject, $message, $headers);
    
    
    

    $reg = "UPDATE `bloodrequest` SET `status` = 'delivered' WHERE `bloodrequest`.`id` = '$id'; ";
    $reg_result = mysqli_query($conn,$reg);
    
    if($reg_result==true)
    {
        header("location:../Transaction.php?true");
    }
    else
    {
        header("location:../Transaction.php?false");
    }
    

}

?>