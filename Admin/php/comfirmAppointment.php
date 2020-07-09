<?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

if (isset($_POST['submit']))
{
    $id=$_POST["id"];
    
    
/*mail code*/
$mail = $_POST['email'];
$time = $_POST['time'];
$date = $_POST['date'];
    
$subject = "Appointment Scheduled ";
$message .= "Your appointment has been scheduled at '.$time.' on '.$date.'  ";

$headers = "From: $mail";
$headers .= "Blood Bank";

mail($mail, $subject, $message, $headers);
    

    $reg = "UPDATE `appointments` SET status ='Scheduled' WHERE id=$id ";
    $reg_result = mysqli_query($conn,$reg) ;
    
    if($reg_result==true)
    {
        header("location:../viewAppointment.php?true");
    }
    else
    {
        header("location:../viewAppointment.php?false");
    }
    

}

?>