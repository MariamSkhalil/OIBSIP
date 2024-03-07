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
      

      
      <div class="container">
        <label style="width:20%;font-size:20;color:white;margin-left:10%" class="form-control-plaintext"> PNR NUMBER:</label>
        <input required style="width:25%;font-size:20;color:black;margin-left:10%" type='text' class="form-control" name='pnrNumber' id="pnrNumber" />
        <br>
		<div style="margin-top: .05%;margin-left:5%">
		<button style="margin-top: 0.5%;margin-left:5%" class ="btn"><input type='submit' name='enter' class="btn btn-success" value='ENTER'/></button>
	</div>	
	</div>
</body>	
