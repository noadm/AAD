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
?>
</section>
<?php
	$sql = "SELECT * FROM users WHERE GPID = '{$_SESSION['GPID']}'";
	$result = mysqli_query($conn, $sql);
	$check = mysqli_num_rows($result);
	if ($check > 0) {
		
			?>
			<div class="row justify-content-center">
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
				<?php
				while ($row = mysqli_fetch_assoc($result)) { 
					?>
					<tr>
						<td><?php echo $row['usersname'];?></td>
						<td><?php echo $row['usersemail'];?></td>
						<td></td>
					</tr>
				</table>
			</div>
			<?php

		}

	}

	

?>
</body>
</html>