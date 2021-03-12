<?php
	include_once 'includes/dbh.inc.php';
	include_once 'header.php';
?>
<style>
body{
      background-color: rgba(250,250,250);
}

.row{
    margin-left:200px;
}

</style>
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
</section>

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://i.pinimg.com/originals/0b/11/3d/0b113d2a3b885f0632ca929c37aa9d97.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>



<?php
	$sql = "SELECT * FROM medication WHERE usersuserID = '{$_SESSION['usersuserID']}'";
	$result = mysqli_query($conn, $sql);
	$check = mysqli_num_rows($result);
	if ($check > 0) {
		
			?>
			<div class="row justify-content-center">
				<table class="table table-dark">
					<thead>
						<tr>
							<th scope="col">Medicine</th>
							<th scope="col">Dose</th>
							<th scope="col">Collect on</th>
						</tr>
					</thead>

				
				<?php
				while ($row = mysqli_fetch_assoc($result)) { 
					?>
					<tbody>
					<tr>
					<th scope="row"></th>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['dose'];?></td>
						<td><?php echo $row['collect'];?></td>
						<td></td>
					</tr>

				</tbody>
				</table>
			</div>
			<?php

    }

}
?>

</body>
</html>