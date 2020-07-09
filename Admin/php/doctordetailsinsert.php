 <?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

if (isset($_POST['save']))
{
    $name = $_POST["name"];
    $id = $_POST["idcard"]
    $slmc = $_POST["slmc"];
    $email = $_POST["email"];
    $tp = $_POST["tp"];
 
    //$slmc = select slmc from dbtable where slmc = "$slmc";

    $query = "SELECT * FROM `doctordetails` WHERE  email='$email' OR slmc ='$slmc' ";

    $result = mysqli_query($conn, $query);

    if($result)
    {
        $num = mysqli_num_rows($result);

       if($num==1)
       {
        header("location:../Doctor-details.php?emailtaken");  //meka email eken kalin register wela tiyanwa nm eka error ekk widihat pennanw
       } 
        else
       {
            $signup = "INSERT INTO `doctordetails` (name,idcard,slmc,email,tp) VALUES ('$name',  '$id', '$slmc', '$email', '$tp') ";

            $signupquery =mysqli_query($conn, $signup);

            if($signupquery==true)
            {
                header("location:../Doctor-details.php?success");  //meka register eka success kiyala pennaw
            }
            else
            {
               header("location:../Doctor-details.php?error");   //meka login eke weradi deatils enter klam error widihat pennaw
            }             
            }
            else
            {
                header("location:../Doctor-details.php?incorrect");
                
            }

       }
    }
}

?>