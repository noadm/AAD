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

                    <table>
	<tr>
		<th>Medicine</th>
		<th>Dose</th>
		<th>Collect on</th>
	</tr>

<?php
	$sql = "SELECT * FROM medication WHERE usersuserID = '{$_SESSION['usersuserID']}'";
	$result = $conn -> query ($sql);
		if ($result-> num_rows > 0) {
		while ($row = $result -> fetch_assoc()) { 
			echo "<tr><td>". $row["name"] ."</td><td>". $row["dose"] ."</td><td>". $row["collect"] ."</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "no results";
	}



			?>
			</div>
</table>

                </div>



</body>
</html>