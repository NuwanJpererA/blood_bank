 <?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "UPDATE appointments SET status='cancelled' WHERE id='$id'";
    
    if (mysqli_query($conn, $query)) 
    {
        header("Location: ../viewAppointment.php?delete");
    } else 
    {
        header("Location: ../viewAppointment.php?error");        
    }
}

?>



