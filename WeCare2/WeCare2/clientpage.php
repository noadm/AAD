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

	$sql = "SELECT usersuserID, usersname FROM users WHERE usersuserID = '{$_SESSION['usersuserID']}'";
	$result = mysqli_query($conn, $sql);
	$check = mysqli_num_rows($result);
	if ($check > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['usersname']. "<br>";
			echo $row['usersuserID']."<br>";
		}

	}




	$sql = "SELECT * FROM medication WHERE usersuserID = '{$_SESSION['usersuserID']}'";
	$result = mysqli_query($conn, $sql);
	$check = mysqli_num_rows($result);
	if ($check > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['name']. "<br>";
			echo $row['dose']. "<br>";
			echo $row['collect']. "<br>";
		}

	}

    
    else echo "<p> Somethings not right </p> "



    

	
		

	
?>

</body>
</html>