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
  <script src="res.js"></script>
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
    <form action="res.php" method="post">
      <br><br><br>
      

      
      <div class="container">
        <label style="width:20%;font-size:20;color:white;margin-left:20%" class="form-control-plaintext"> User ID:</label>
        <input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='userid' id="userid" />
        <br>
        <label style="width:20%;font-size:20;color:white;margin-left:20%" class="form-control-plaintext">train Number:</label>
        <input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='train_number' id="train_number" />
        <br>
        <label style="width:20%;font-size:20;color:white;margin-left:20%" class="form-control-plaintext">train Name:</label>
        <input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='train_name' id="train_name" />
        <br>
        <label style="width:20%;font-size:20;color:white;margin-left:20%" class="form-control-plaintext">Class:</label>
        <input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='class' id="class" />
        <br>
		<label style="width:20%;font-size:20;color:white;margin-left:20%" class="form-control-plaintext">Date Of Journey:</label>
        <input required style="width:25%;font-size:20;color:black;margin-left:20%" type='date' class="form-control" name='Start_date' id="Start_date" />
        <br>
		<label style="width:20%;font-size:20;color:white;margin-left:20%" class="form-control-plaintext">From:</label>
        <input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='fromPlace' id="fromPlace" />
        <br>
		<label style="width:20%;font-size:20;color:white;margin-left:20%" class="form-control-plaintext">To:</label>
        <input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='toDestination' id="toDestination" />
        <br>
		<div style="margin-top: 1%;margin-left:10%">
		<button style="margin-top: 2%;margin-left:10%" class ="btn"><input type='submit' name='reserve_train' class="btn btn-success" value='RESERVE'/></button>
	</div>	
	</div>
</body>	
