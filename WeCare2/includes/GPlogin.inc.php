<?php

if (isset($_POST["submit"])) {
	
	$username = $_POST["GPID"];
	$password = $_POST["password"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputLogin($username, $password) !== false) {
      header("Location: ../GPlogin.php?error=emptyinput");
      exit();
	}

	loginGP($conn, $username, $password);

}
else {
	header("location: ../GPlogin.php");
	exit();
}
?>
