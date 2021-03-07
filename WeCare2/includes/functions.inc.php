<?php
function emptyInputSignup($name, $email, $username, $password, $passwordrpt) {

	$results;
	if (empty($name)||empty($email)||empty($username)||empty($password)||empty($passwordrpt)) {
		$results = true;
	}
	else {
		$results = false;
	}

	return $results;
}

function invalidUserID($username) {

	$results;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		$results = true;
	
	}
	else {
		$results = false;
	}

	return $results;
}

function invalidEmail($email) {

	$results;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$results = true;
	
	}
	else {
		$results = false;
	}

	return $results;
}

function passwordMatch($password, $passwordrpt) {

	$results;
	if ($password !== $passwordrpt){
		$results = true;
	
	}
	else {
		$results = false;
	}

	return $results;
}

function userIDExists($conn, $username, $email) {
	$sql = "SELECT * FROM users WHERE usersuserID = ? OR usersemail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else{
		$results = false;
		return $results;
	}

	mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $password) {
	$sql = "INSERT INTO users (usersname, usersemail, usersuserID, userspassword) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedpassword);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);	
	header("location: ../signup.php?error=none");
		exit();

}
function emptyInputLogin($username, $password) {

	$results;
	if (empty($username)||empty($password)) {
		$results = true;
	}
	else {
		$results = false;
	}

	return $results;
}
function loginUser($conn, $username, $password){
	$userIDExists = userIDExists($conn, $username, $username);

	if ($userIDExists === false) {
		header("location: ../login.php?error=wronglogin");

		exit();
	}

	$hashedpassword = $userIDExists["userspassword"];
	$checkpassword = password_verify($password, $hashedpassword);

	if ($checkpassword === false) {
		header("location: ../login.php?error=wronglogin");

		exit();
	}
	else if ($checkpassword === true) {
		 session_start();
		 $_SESSION["usersID"] = $userIDExists["usersID"];
		 $_SESSION["usersuserID"] = $userIDExists["usersuserID"];
		 header("location: ../index.php");
		 exit();

	}

}
function GP_IDExists($conn, $username, $email) {
	$sql = "SELECT * FROM GP WHERE GPID = ? OR GPemail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else{
		$results = false;
		return $results;
	}

	mysqli_stmt_close($stmt);
}


function loginGP($conn, $username, $password){
	$GP_IDExists = GP_IDExists($conn, $username, $username);

	if ($GP_IDExists === false) {
		header("location: ../GPlogin.php?error=wrongusername");

		exit();
	}

	$hashedpassword = $GP_IDExists["GPpassword"];
	$checkpassword = password_verify($password, $hashedpassword);

	if ($checkpassword === false) {
		header("location: ../GPlogin.php?error=wrongpassword");

		exit();
	}
	else if ($checkpassword === true) {
		 session_start();
		 $_SESSION["ID"] = $GP_IDExists["ID"];
		 $_SESSION["GPID"] = $GP_IDExists["GPID"];
		 header("location: ../index.php");
		 exit();

	}
}