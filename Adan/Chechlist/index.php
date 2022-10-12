<?php 
    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "adan", "728103093AAmm!", "adan_localhost");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['Produkte'])) {
			$errors = "You must fill in the task";
		}else{
			$Produkte = $_POST['Produkte'];
			$sql = "INSERT INTO Produktlist (Produkte) VALUES ('$Produkte')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
	}

?>	

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="styAle.css">
<head>
	<title>Add Produkt</title>
</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">Add Produktlist</h2>
	</div>
	<form method="post" action="index.php"> 

	<?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
	<?php } ?> 

		<input type="text" name="Produkte" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Produkt</button>
	</form>

	<table>
	<thead>
		<tr>
			<th>Nummer</th>
			<th>Produkte</th>
		</tr>
	</thead>

	<tbody>
		<?php 
		// select all tasks if page is visited or refreshed
		$Produktlist = mysqli_query($db, "SELECT * FROM Produktlist");

		$i = 1; while ($row = mysqli_fetch_array($Produktlist)) { ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td class="Produkte"> <?php echo $row['Produkte']; ?> </td>
			</tr>
		<?php $i++; } ?>	
	</tbody>
</table>


</body>
</html>