<?php 
$title = "Index";
include 'includes/header.php' 

?>
		<!-- Basic HTML -->
		<h1>Hello World - PHP Primer - <?php echo $title?></h1>

		<?php
		//Printing to HTML using echo
		/*Comentario multilinea
		*/  
			echo "Hello PHP!";
			echo "<br/>";
			echo "Second Lin";
			echo "<br/>";


		?>

		<?php
			$name = "Trevoir Williams";

			echo $name;
		?>

<?php
		// declare variable 
			
			$name = "Trevoir Williams";
			$age = 21;
			// echo variable
			echo $name;
			echo '<h1>My name is: '.$name.' </h1>';
			echo '<h1>My age is: '.$age.' años</h1>';

			//echo using double quotes and interpolation
			echo "<h1 style='color:red'>My Name is: $name </h1>";


		?>
		<button type="button" class="btn btn-dark">CLICK ME!</button>
		<button type="button" class="btn btn-primary">CLICK ME!</button>
		<button type="button" class="btn btn-success">CLICK ME!</button>

<?php require 'includes/footer.php'  ?>

