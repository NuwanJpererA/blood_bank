 <?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");


if (isset($_GET['delid'])) {
    $id = $_GET['delid'];
    $query = "DELETE FROM `member` WHERE id='$id'";
    
    if (mysqli_query($conn, $query)) 
    {
        header("Location: ../memberdetails.php?delete");
    } else 
    {
        header("Location: ../memberdetails.php?error");        
    }
}

?>



