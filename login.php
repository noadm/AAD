<?php
include_once 'header.php';
?>


	<form action="includes/login.inc.php" method="post">
		<input type="text" name="userID" placeholder="Username...">
		<input type="password" name="password" placeholder="Password...">
		<button type="submit" name="submit">Log-in</button>
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
</section>




<?php
include_once 'footer.php'
?>