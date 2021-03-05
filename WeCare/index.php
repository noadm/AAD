<?php
include_once 'includes/dbh.inc.php';
include_once 'header.php';
?>


<section class="index-intro">
<div class="topnav">
	<a href="active" href="#home">Home</a>
    <a href="#AboutUs">About Us</a>
    <a href="#SignUp">Sign Up</a>
	<a href="#Login">Log In</a>
	<a href="#GP-Login">GP-Login</a>
    <a href="#" class="right">Contact Us</a>
</div>
	<?php
	if (isset($_SESSION["usersuserID"])) {
		echo "<p> Hello " . $_SESSION["usersuserID"] . "</p>";
					  
		}
?>

</section>

<?php
include_once 'footer.php'
?>