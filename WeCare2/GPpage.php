<?php
	include_once 'includes/dbh.inc.php';
	include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	table {
		border-collapse: separate;
		border-spacing: 40px;
		width: 100%
		color: #d96459;
		font-family: monospace;
		font-size: 20px;
		text-align: justify-all;
	}
	th{
		background-color: #588c7e;
		color: white;
	}

</style>
</head>
<body>
<section class="index-intro">
<?php
	if (isset($_SESSION["GPID"])) {
		echo "<p> Hello Dr. " . $_SESSION["GPID"] . "</p>";
					  
	}
?>
</section>
<table class="table table-dark">
	<tr>
		<th>Client</th>
		<th>Client email</th>
		<th colspan="2">Actions</th>

	</tr>

<?php
	$sql = "SELECT * FROM users WHERE GPID = '{$_SESSION['GPID']}'";
	$result = $conn -> query ($sql);
		if ($result-> num_rows > 0) {
		while ($row = $result -> fetch_assoc()) { 
			echo "<tr><td>". $row["usersname"] ."</td><td>". $row["usersemail"] ."
				</td></tr>";
		}
		echo "</table>";
	}

	$sql = "SELECT * FROM medication WHERE GPID = '{$_SESSION['GPID']}'";
	$data = mysqli_query($conn,$sql);
	$total = mysqli_num_rows($data);
		if ($total!= 0) {
		while ($result = mysqli_fetch_assoc($data)) 
		{ 
			echo "<tr>
			<td><a href = 'updateud.php?ud=$result[collect]'>Update Prescription</td>
			<td><a href = 'updatemd.php?md=$result[name]'>Prescribe</td>
			</tr>";
		}

		echo "</table>";
	}


	else {
		echo "no results";
	}




			?>
			</div>


</table>

</body>
</html>