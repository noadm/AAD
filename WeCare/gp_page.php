<?php
include_once 'header.php';
?>


<!DOCTYPE html>
<html lang="en-GB">
<head>
<title></title>
</head>
<body>

<!-- The sidebar -->
<div class="sidebar">
  <a class="#1" href="#home">Home</a>
  <a href="#2">Patient Request</a>
  <a href="#3">Approved</a>
  <a href="#4">Denied</a>
</div>

<!-- Page content -->
<div class="content">

<div>


<p class="1">Patients</p>


</div>

<?php 
$username = "root"; 
$password = ""; 
$database = "WeCare";

// Create Connection //
$mysqli = new mysqli("localhost", $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }

$query = "SELECT * FROM users";





echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td> 
          <td> <font face="Arial">Value5</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["usersname"];
        $field2name = $row["usersemail"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td> <input type="button" onclick="window.location.href="prescribe.php";" value="Prescribe" /></td>
              </tr>';

    }

}

?>



</body>
</html>


<?php
include_once 'footer.php'
?>

