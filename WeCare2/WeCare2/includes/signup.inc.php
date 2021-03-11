<?php

if (isset($_POST["submit"])) {
	echo "It works";

	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["userID"];
	$password = $_POST["password"];
	$passwordrpt = $_POST["passwordrpt"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputSignup($name, $email, $username, $password, $passwordrpt) !== false) {	
      header("Location: ../signup.php?error=emptyinput");
      exit();
	}
	if (invalidUserID($username) !== false) {	
      header("Location: ../signup.php?error=invalidUserID");
      exit();
	}
	if (invalidEmail($email) !== false) {	
      header("Location: ../signup.php?error=invalidemail");
      exit();
	}
	if (passwordMatch($password, $passwordrpt) !== false) {	
      header("Location: ../signup.php?error=passwordnotmatching");
      exit();
	}
	if (userIDExists($conn, $username, $email) !== false) {	
      header("Location: ../signup.php?error=usernametaken");
      exit();
	}


createUser($conn, $name, $email, $username, $password);

}
 else{
 	header("Location: ../signup.php");
 }