<?php 
$title = "Simple For Loop";
include 'includes/header.php' 
?>

		<h2><?php echo $title?></h2>

		<!-- Basic HTML -->
		<h1>For Loop</h1>
		<?php
			// For Loops
			for($count = 0; $count < 10; $count++){
				echo '<p>HELLO WORLD</p>';
			}

			for($count = 0; $count < 10; $count++){
				echo "<p>The count is: $count </p>";
			}


				?>

<?php require 'includes/footer.php'  ?>