<?php
include_once 'includes/dbh.inc.php';
include_once 'header.php';

$md = $_GET['md'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	
	<form action="" method="GET">
	<table border="0" bgcolor="black" align="center" cellspacing="20">
	<tr>
		<td><input type="text" value="<?php echo "$md" ?>" name="name" required></td>
	</tr>

	<tr>
		<td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Prescribe"></a></td>
	</tr>
	</table>
	</form>

</body>
</html>
<?php
include_once 'includes/dbh.inc.php';

if($_GET['submit'])
{
	$name = $_GET['name'];
$query = "UPDATE medication SET name='$name' WHERE name='$name' ";
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