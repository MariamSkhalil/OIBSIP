<?php

if(isset($_POST['reg_user'])){
    session_start();
    
    $login_id = $_POST['login_id'];
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $phone = $_POST['phone'];
    $password_1 = md5($_POST['password']);

    $con = mysqli_connect("127.0.0.1","root","","reservationdb");
    if (mysqli_connect_errno()) {
     die("Connection failed: " . mysqli_connect_error());}

    $sql = "SELECT * FROM users WHERE login_id='$login_id'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result) == 0)
    {
        $sql = "INSERT INTO users (login_id,fname,lname,phone,`password`)
        VALUES ('$login_id','$fname','$lname','$phone','$password_1')";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            echo"<script> alert('Registration Done Successfully')</script>";
        }else {
            echo "<script>alert('Something went wrong')</script>";
             }
    }else {
        echo "<script>alert('login_id Already Exists !!')</script>";
          }
        }

?>
