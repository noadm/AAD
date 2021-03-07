<?php
include_once 'header.php';
?>

<section class ="signup-application">
	<h2>Log-in</h2>
	<form action="includes/GPlogin.inc.php" method="post">
		<input type="text" name="GPID" placeholder="GP Username...">
		<input type="password" name="password" placeholder="Password...">
		<button type="submit" name="submit">Log-in</button>
	</form>
  <?php
if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyinput") {
		echo "<p> Fill in all fields! </p>";
	}
	else if ($_GET["error"]== "wrongpassword") {
		echo "<p> Wrong Password!</p>";
	}
	else if ($_GET["error"]== "wrongusername") {
		echo "<p> Wrong Username!</p>";
	}
}
?>
</section>




<?php
include_once 'footer.php'
?>