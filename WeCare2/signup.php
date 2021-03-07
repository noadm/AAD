<?php
include_once 'header.php';
?>

<section class ="signup-application">
	<h2>Sign-up</h2>
	<form action="includes/signup.inc.php" method="post">
		<input type="text" name="name" placeholder="Full name...">
		<input type="text" name="email" placeholder="Email...">
		<input type="text" name="userID" placeholder="Username...">
		<input type="password" name="password" placeholder="Password...">
		<input type="password" name="passwordrpt" placeholder="Repeat Password...">
		<button type="submit" name="submit">Sign Up</button>
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
</section>

<?php
include_once 'footer.php'
?>