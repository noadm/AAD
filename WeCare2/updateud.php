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
	<br><br>
	<form action="" method="GET">
	<table border="0" bgcolor="black" align="center" cellspacing="15">
	<tr>
		<td><input type="date" value="<?php echo "$ud" ?>" name="collect" required></td>
	</tr>

	<tr>
		<td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Update prescription"></td>
	</tr>
	</table>
	</form>

</body>
</html>
<?php

if($_GET['submit']){
	$collect = $_GET['collect'];
$query = "UPDATE medication SET collect='$collect' WHERE collect='$collect' ";
$data = mysqli_query($conn,$query);

if ($data) {
	echo "<script>alert('Updated prescription!')</script>";
}
else
{
	echo "Failed to update";
}
}

?>