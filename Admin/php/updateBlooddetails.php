<?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

if (isset($_POST['add']))
{

    $id = $_POST["memid"];
    $bloodGroup= $_POST["blood_group"];
    $units= $_POST["units"];
    
    
    $query =" SELECT units FROM bloodgroup WHERE blood_group='$bloodGroup'";
    $result = mysqli_query($conn, $query);


    $row = mysqli_fetch_assoc($result)   ;          
    $curUnits = $row['units'];

    $total = $units+$curUnits;
    
   $ada = date('Y-m-d H:i:s');
        

   
    $reg = "UPDATE `bloodgroup` SET units='$total',updated_at='$ada' WHERE id ='$id'";
    $reg_result = mysqli_query($conn,$reg);
    
    if($reg_result==true)
    {
        header("location:../Blood-group.php?true");
    }
    else
    {
        header("location:../Blood-group.php?false");
    }
    

}

?>