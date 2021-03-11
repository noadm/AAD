<?php
include_once 'includes/dbh.inc.php';
include_once 'header.php';
?>


<section class="index-intro">
	<?php
	if (isset($_SESSION["usersuserID"])) {
		echo "<p> Hello " . $_SESSION["usersuserID"] . "</p>";
					  
		}

	else if (isset($_SESSION["GPID"])) {
		echo "<p> Hello " . $_SESSION["GPID"] . "</p>";
					  
		}

?>

</section>

<?php
include_once 'footer.php'
?>