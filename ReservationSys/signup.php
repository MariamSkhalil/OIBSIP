<?php include('register.php') ?>

<html>
<head>
<link rel="stylesheet" media="screen" href="bootstrap.min.css">
<script src="register.js"></script>

<script type = "text/javascript">
   function signup()
   {
      var login_id = document.forms["form2"]["login_id"].value;
      var pass = document.forms["form2"]["password"].value;
      var phone = document.forms["form2"]["phone"].value;
      if(reg()&& phoneValidation(phone))

      {

         $.ajax
            ({
            type:'post',
            url:'index.php',
            data:{
               signup
            :"signup",
               login_id:login_id,
               password:pass,
               phone: phone ,
            },
            success:function(response)
            {
               if(response=="success")
               {
                  window.location.href="index.php";
               }
               else
               {

                     alert("Wrong Details");
               }
            }
         });
      }
         return false;
   }


   function reg()
   {
      var var1 = document.forms["form2"]["Fname"].value;
      var var2 = document.forms["form2"]["login_id"].value;
      var var3 = document.forms["form2"]["password"].value;
      var var4 = document.forms["form2"]["cpassword"].value;
      var var5 = document.forms["form2"]["Lname"].value;
      var var6 = document.forms["form2"]["phone"].value;
      

      if (var1.trim() == "" || var2.trim()=="" || var3.trim()=="" || var4.trim()=="" || var5.trim()==""|| var6.trim()=="")
      {
         alert("Please fill all fields");
         return false;
      }
      else if(var3 !=var4)
      {
         alert("password and confirm password don't match");
         return false;
      }
      else
      {
         return true;
      }
   }


   function phoneValidation(phone){
  // phone = document.forms["form2"]["phone"].value
   var phonePattern = /^\d{11}$/;
   if( phonePattern.test(phone))
        {
      return true;
        }
      else
        {
        alert("Phone Number must be 11 digit");
        return false;
        }
}

   </script>
</head>
<body class="modal-body">
<style>
body {
  background-image: url('img7.jpg');
  background-repeat: no-repeat;
  background-attachment:fixed;
  background-size:cover;
  overflow-x: hidden;
}
.btn {
  position: absolute;
  top: 92%;
  left: 73%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
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

<h1 style="color:white; margin-left:45%; font-family: Cambria ">Sign up<h1>
<form action='#' method='post' onsubmit="return signup();" id="form2">
<div class="form-group">
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >First name:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='text' class="form-control" name='Fname'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >Last name:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='text' class="form-control" name='Lname'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >ID:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='text' class="form-control" name='login_id'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >Password:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='password' class="form-control" name='password'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >Confirm Password:</label>
<input style="width:20%;font-size:15;;margin-left:55%;; font-family: Cambria"type='password' class="form-control" name='cpassword'/>
<label style="width:20%;font-size:17;color:white;margin-left:55%;; font-family: Cambria" class="form-control-plaintext" >Phone:</label>
<input style="width:20%;font-size:15;color:black;margin-left:55%;; font-family: Cambria"type='text' class="form-control" name='phone'/>

</div>
<div style="margin-top: 1">
<button class ="btn"><input type='submit' name='reg_user' class="btn btn-success" value='Sign Up' /></button>
</div>
</form>
<a href="index.php" style="margin-left:55%;; font-family: Cambria; color:white ; font-size: 18px;margin-left:55%;; font-family: Cambria">Already have an account ?</a>

<!-- </main> -->
</body>
</html>
