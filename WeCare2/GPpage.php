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
		echo "<p> Hello " . $_SESSION["GPID"] . "</p>";
					  
	}

	$sql = "SELECT * FROM GP WHERE GPID ='Ak';";
	$result = mysqli_query($conn, $sql);
	$check = mysqli_num_rows($result);
	if ($check > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['GPname']. "<br>";
			echo $row['GPID']."<br>";
		}

	}

	

?>
</section>
</body>
</html>