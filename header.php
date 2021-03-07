<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>WeCare</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>

		<nav>
			<div class="wrapper">
				<a href="index.php"><img src="img/WeCare.png" alt="WeCare logo"></a>
				<ul>
					<div class="topnav">
					<li><a href="#home" href="index.php">Home</a></li>
					<li><a href="#AboutUs" href="aboutus.php">About us</a></li>
					<?php

					if (isset($_SESSION["usersuserID"])) {
						echo "<li><a href='clientpage.php'>Profile</a></li>";
					    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
					}

					else{
						echo "<li><a href='signup.php'>Sign up</a></li>";
					    echo "<li><a href='login.php'>Login</a></li>";
					}
					?>
				</ul>
				
			</div>
		</nav>

	<div class="wrapper">
	</body>
</html>