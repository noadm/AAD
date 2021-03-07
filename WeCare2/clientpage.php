<?php
	include_once 'includes/dbh.inc.php';
	include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<section class="index-intro">
	<?php
	if (isset($_SESSION["usersuserID"])) {
		echo "<p> Hello " . $_SESSION["usersuserID"] . "</p>";
					  
		}
?>

<?php

	$sql = "SELECT * FROM users WHERE usersname='Naod Mulgetta';";
	$result = mysqli_query($conn, $sql);
	$check = mysqli_num_rows($result);
	if ($check > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['usersname']. "<br>";
			echo $row['usersuserID']."<br>";
			echo $row['bloodworkresults']."<br>";
		}
	}
?>

</body>
</html>