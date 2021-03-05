<?php
include_once 'includes/dbh.inc.php';
include_once 'header.php';
?>


<section class="index-intro">
	<?php
	if (isset($_SESSION["usersuserID"])) {
		echo "<p> Hello " . $_SESSION["usersuserID"] . "</p>";
					  
		}
?>

</section>

<?php
include_once 'footer.php'
?>