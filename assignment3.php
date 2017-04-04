<?php 

	include 'ParentClass.php';
	include 'ChildClass.php';

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" type="text/css" href="assignment3.css">
</head>
<body>
	<div class="center">
		<h1> Find Your Puppy! </h1>
		<?php
			if(null == isset($_POST['Submit'])){
			
		?>
		<h3> What will you name your puppy?</h3>
		<form name ="puppyForm" method="post">
			<input type="text" name="name"><br>
			<input type="Submit" name="Submit">
		</form>
	</div>
	<?php
		}
		else{
			$puppy = new ChildClass($_POST['name'], "", "");
			$puppy->setPuppy();
			$puppyNum = $puppy->getIndex();
			?>
			<div class="center">
			<h2> <?php echo $puppy;?> </h2>
			<img src="img/<?php echo $puppyNum;?>.jpg" alt="Picture of puppy"/>
			</div>
			<?php
		}
	?>
	
</body>
</html>