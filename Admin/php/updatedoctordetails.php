 <?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

if (isset($_POST['add']))
{
    $memid = $_POST["memid"];
    $name = $_POST["dname"];
    $id = $_POST["idn"];
    $slmc = $_POST["slmc"];
    $email = $_POST["email"];
    $tp = $_POST["tp"];
 
    
    $reg = "UPDATE `doctordetails` SET name='$name',idcard='$id',slmc='$slmc', email='$email',tp='$tp' WHERE id='$memid'";
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