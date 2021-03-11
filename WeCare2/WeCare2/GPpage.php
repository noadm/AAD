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
	if (isset($_SESSION["GPID"])) {
		echo "<p> Hello Dr. " . $_SESSION["GPID"] . "</p>";
					  
	}

	$sql = "SELECT * FROM users WHERE GPID = '{$_SESSION['GPID']}'";
	$result = mysqli_query($conn, $sql);
	$check = mysqli_num_rows($result);
	if ($check > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			
			echo "<p> Clients </p>";
			echo $row['usersname']. "<br>";
			echo $row['usersemail']. "<br>";
			



		}

	}

	

?>
</section>
</body>
</html>