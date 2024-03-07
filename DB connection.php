<?php
$connection = mysqli_connect("127.0.0.1","root","","reservationdb");
 if (!$connection) {
     die("Connection failed: " . mysqli_connect_error());
 }
?>
