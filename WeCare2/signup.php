<?php
include_once 'header.php'
?>




<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Signup</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	</head>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">
      <div class="card cardbox">
        <div class="card-header">Register</div>
        <div class="card-body">
      
          <div class="form-group">
            
            <form id="login-nav" action="includes/signup.inc.php" method="post" role="form" class="form" accept-charset="UTF-8">
              <div class="form-group">
                <label class="sr-only">Full Name</label>
                <input type="text" id="reg_username" name="name" class="form-control"
                value="" placeholder="Full Name" required>
              </div>
              
             <!--password group-->
              <div class="form-group">

			        <!--Email-->
              <div class="form-group">
                <label class="sr-only">E-mail Address</label>
                <input type="text"  name="email" class="form-control"  placeholder="patientName@.weCare.co.uk">
              </div>

              <!--UserID-->
              <div class="form-group">
                <label class="sr-only">UserID</label>
                <input type="text" name="userID" class="form-control" placeholder="Username...">
              </div>

              <!--password label-->
              <label class="sr-only">Password</label>
                 <!--password input-->
                <div class="input-group">
                  <input type="password" name="password" class="form-control" placeholder="Password..." >
                </div>
               <!--password confirm group-->
              <div class="form-group">

                 <!--password confirm label-->
                <label class="sr-only">Password Confirm</label>
                 <!--password input-->
                <div class="input-group">
                  <input type="password"  name="passwordrpt" class="form-control" placeholder="Repeat Password..." required>
                  
                </div>
                </div>
       
               <!--Submit form-->
              <div class="form-group">
                <button type="submit" name="submit"  class="btn btn-block btn-primary" >Sign Up</button>
              </div>
            </form>

            <?php
if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyinput") {
		echo "<p> Fill in all fields! </p>";
	}
	else if ($_GET["error"]== "invaliduserID") {
		echo "<p> Choose a proper username!</p>";
	}
	else if ($_GET["error"]== "invalidemail") {
		echo "<p> Choose a proper email!</p>";

	}
	else if ($_GET["error"]== "passwordnotmatching") {
		echo "<p> Passwords dont match!</p>";
	}
	else if ($_GET["error"]== "stmtfailed") {
		echo "<p> Something went wrong. try again!</p>";
	}
	else if ($_GET["error"]== "usernametaken") {
		echo "<p> Username already taken!</p>";
	}
	else if ($_GET["error"]== "none") {
		echo "<p> Congratulations, you have signed up!</p>";
	}

}
?>


          </div>
		  
          <div class="login-or"><hr class="hr-or"></div>
		  <!--Hyper link to Login-->
          <div class="bottom text-center">
            Already signed up? <a href="login.php"><b>Login</b></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</head>
</html>

<?php
include_once 'footer.php'
?>