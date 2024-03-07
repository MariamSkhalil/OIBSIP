<?php include('loginCustomer.php') ?>
<html>
<head>
<link rel="stylesheet" media="screen" href="bootstrap.min.css">
<script src="login.js"></script>


<script type = "text/javascript">
   function do_login()
   {

      var login_id = document.forms["form1"]["login_id"].value;
      var pass = document.forms["form1"]["password"].value;

      if(required())
      {

         $.ajax
            ({
            type:'post',
            url:'index.php',
            data:{
               do_login:"do_login",
               login_id:login_id,
               password:pass
            },
            success:function(response)
            {
               if(response=="success")
               {
                  var check_box = document.getElementsByName("user");
                  
                     window.location.href="loginCustomer.php";
                  
               }
               else
               {

                     alert("Wrong Details");
               }
            }
         });
      }

      else
      {
         alert("Please Fill All The Details");
      }

      return false;
   }
   function required()
   {
      var empt1 = document.forms["form1"]["login_id"].value;
      var empt2 = document.forms["form1"]["password"].value;
      if (empt1.trim() == "" || empt2.trim()=="")
      {
         return false;
      }
      else
      {
         return true;
      }
   }


</script>

</head>
<body class="modal-body">
<style>
body {
  background-image: url('img7.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  overflow-x: hidden;

}
.btn {
  position: absolute;
  top: 43.5%;
  left: 34%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 15px;
  padding: 4px 24px;
  border: none;
  cursor: pointer;
  border-radius: 3px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}
</style>
<main  class="container" style="margin-top: 1%;margin-left:20%">
<h1 style="color:white;margin-top:1%;margin-left:10%;font-family: Cambria ">Log in<h1>
<form action='#' method='post' onsubmit="return do_login();" id="form1">
<div class="form-group">
<label style="color:white;font-size:20;margin-top:0.5%" class="form-control-plaintext" >Login ID:</label>
<input style="width:30% ;margin-top:0.5%" type='text' class="form-control" name='login_id' id='login_id'/>
<label style="color:white;font-size:20;margin-top:0.5%" class="form-control-plaintext" >Password:</label>
<input style="width:30% ;margin-top:0.5%" type='password' class="form-control" class="form-control"  name='password' id='password'/>

</div>
<div style="margin-top: 1%;margin-left:10%">
<button style="margin-top: 2%;margin-left:10%" class ="btn"><input type='submit' name='submit' class="btn btn-success" value='Log in'/></button>



</div>
</form>

<a href="signup.php"style=" color:white;margin-left:1%; margin-top:2%; font-size: 15px">Create an account</a><br>


</form>
</main>
</body>
</html>
