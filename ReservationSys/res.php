<?php
include 'DB connection.php';

if (isset($_POST['reserve_train'])) {
    $userid = $_POST['userid'];
    $trainNumber = $_POST['train_number'];  
    $trainName = $_POST['train_name'];   
    $class = $_POST['class'];
    $startDate = $_POST['start_date'];
    $fromPlace = $_POST['fromPlace'];
    $toDestination = $_POST['toDestination'];
    
    
    // Insert the reservation details into the Reservations table
    $query = "INSERT INTO Reservations (UserID,TrainNumber,TrainName,ClassType,DateOfJourney,FromPlace,ToDestination) VALUES ('$userid','$trainNumber','$trainName','$class','$startDate','$fromPlace','$toDestination')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Retrieve the Reservation ID
        $reservationId = mysqli_insert_id($connection);
        $pnrNumber = "PNR" . str_pad($reservationId, 6, "0", STR_PAD_LEFT);
        $query = "UPDATE Reservations SET PNR='$pnrNumber' WHERE reservationID =$reservationId ";
        $result = mysqli_query($connection, $query);

        // Display the alert confirmation message with the Reservation ID
        echo '<script> alert("Reservation successful! Reservation PNR: ' . $pnrNumber . '");</script>';
        header('location:welcome.php');

    } else {
        // Display an error message if the reservation was not successful
        echo '<script>alert("Reservation failed. Please try again.");</script>';
    }
}
?>