<?php
include_once 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	</head>
	
	<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">
      <div class="card cardbox">
        <div class="card-header">Login</div>
        <div class="card-body">
      
          <div class="form-group">
            
          <form action="includes/login.inc.php" method="post">
              <div class="form-group">
                <label class="sr-only">Full Name</label>
                <input type="text"  name="userID" class="form-control" placeholder="Full Name">



              </div>
              
              <!-- password group -->
              <div class="form-group">
                
                <!-- password label -->
                <label class="sr-only">Password</label>
                <!-- password input -->
                <div class="input-group">
                  <input type="password"  name="password" class="form-control" placeholder="Password...">
                </div>
           
              <!-- Submit form -->
              <div class="form-group">
                <button type="submit" name="submit"  class="btn btn-block btn-primary" >Log-in</button>
                <div id="sign-up-popover" class="hide"><p>is empty</p></div>
              </div>
            </form>


            
            <?php
if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyinput") {
		echo "<p> Fill in all fields! </p>";
	}
	else if ($_GET["error"]== "wronglogin") {
		echo "<p> Login information doesnt seem to match!</p>";
	}
}
?>

          </div>
		  
          <div class="login-or"><hr class="hr-or"></div>
		  <!-- Links -->
          <div class="bottom text-center">
            Don't have an account? <a href="signup.php"><b>Signup</b></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include_once 'footer.php'
?>