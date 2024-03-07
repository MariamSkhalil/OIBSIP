<?php
include 'DB Connection.php';

if(isset($_POST['cancel'])){
    $pnrNumber = $_POST['pnrNumber'];

    $sql = "DELETE FROM reservations WHERE PNR='$pnrNumber'";
    $result = mysqli_query($connection,$sql);


    if($result)
    {
            echo"<script> alert('Reservation Deleted Successfully')</script>";
            header('location:welcome.php');
    }
	else {
            echo "<script>alert('Something went wrong')</script>";
         }
}

?>
