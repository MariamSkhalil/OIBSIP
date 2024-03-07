<?php include('delete_res.php') ?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-image: url('imh7.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    @media all and (min-width: 992px) {
      .navbar .nav-item .dropdown-menu { display: none; }
      .navbar .nav-item:hover .nav-link { }
      .navbar .nav-item:hover .dropdown-menu { display: block; }
      .navbar .nav-item .dropdown-menu { margin-top: 0; }
    }
  </style>
  <link rel="stylesheet" media="screen" href="bootstrap.min.css">
  <script src="delete_res.js"></script>
  <title>Train Page</title>
</head>

<body class="modal-body">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <a class="navbar-name" href="#">
          <img src="trainlogo.jpeg" width="60" height="40" alt="">
        </a>
        <li class="nav-item active">
          <a class="nav-link" href="reserve.php">For Booking <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="my_reservation.php">Cancellation <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
		<div>
			<form action="cancel.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Reservation Info</h2><br>


        <table class="table table-hover table-light">
        <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">User ID</th>
      <th scope="col">Train no.</th>
      <th scope="col">Train Name</th>
      <th scope="col">Class</th>
			<th scope="col">Date Of Journey</th>
			<th scope="col">From</th>
			<th scope="col">To</th>



    </tr>
    <div style="margin-top: .05%;margin-left:5%">
    <input type="hidden" name="pnrNumber" value="<?php echo $_POST['pnrNumber']; ?>">
		<button style="margin-top: 0.5%;margin-left:5%" class ="btn"><input type='submit' name='cancel' class="btn btn-success" value='CANCEL'/></button>
	</div>	
  </thead>    
<?php
include 'DB Connection.php';

if(isset($_POST['enter'])){
    $pnrNumber = $_POST['pnrNumber'];
    $query="SELECT * FROM reservations WHERE PNR='$pnrNumber'";
    $result = mysqli_query($connection,$query);
    $index=0;
    while ($row=mysqli_fetch_array($result)) {      
      $index=$index+1; 
      ?>
      <tbody class="opacity-50" style="background:white;">
      <tr>
            <th scope="row"><?php echo $index?></th>
            <td><?php echo $row['UserID']?></td>
            <td><?php echo $row['TrainNumber']?></td>
            <td><?php echo $row['TrainName']?></td>
            <td><?php echo $row['ClassType']?></td>
        <td><?php echo $row['DateOfJourney']?></td>
        <td><?php echo $row['FromPlace']?></td>
        <td><?php echo $row['ToDestination']?></td>
  
      </tr>
    <?php }} ?>  
    
  </tbody>
</table>
    </form>
		</div>
	</body>
</html>