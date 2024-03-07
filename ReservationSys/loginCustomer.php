
<?php

if(isset($_POST['login_id']) && isset($_POST['password'])){
session_start();

$login_id=$_POST['login_id'];
$password=md5($_POST['password']);


$con = mysqli_connect("127.0.0.1","root","","reservationdb");
 if (mysqli_connect_errno()) {
     die("Connection failed: " . mysqli_connect_error());
 }
$sql="SELECT *  FROM users WHERE login_id='$login_id' AND password='$password'";
$query=mysqli_query($con,$sql) ;
   $row=mysqli_fetch_array($query);
   if($row){
   $sql = "SELECT * FROM users WHERE login_id = '$login_id'";
    $res = mysqli_query($con, $sql);
    $userRow = mysqli_fetch_array($res);
    $id=$userRow['user_id'];
    $fname = $userRow['fname'];
    $lname = $userRow['lname'];
    $login_id = $userRow['login_id'];
    $phone = $userRow['phone'];
    $_SESSION['user_id']=$id;
    $_SESSION['login_id']=$login_id;
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['phone']=$phone;

    echo"<script>alert('login successful')</script>";
    header('location:welcome.php');
   }
   else
   {
    echo"<script>alert('invalid login_id or password')</script>";
   }

}
?>
