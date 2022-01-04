
<?php		
	require 'connection.php';
?>
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Owners List</title>
	
</head>
<body>

	<div class="header">
		<h2>Home Owners *</h2>
	</div>

	<?php 
		if(isset($_POST['update'])){
			$id = $_POST['update_id'];
			$query = "SELECT * FROM information WHERE id = '$id' LIMIT 1 ";
			$query_run = mysqli_query($connection, $query);
	
			if (mysqli_num_rows($query_run) > 0){
				while ($row = mysqli_fetch_assoc($query_run)) { 
	?>

		<form method="POST" action="code.php">
			<input type="text" id="information" name="information" class="" value="<?php echo $row['Fullname'] ?>">

			<input type="hidden" name="updt_id" value="<?php echo $row['id'] ?>">
			<button type="submit" name="update_btn" class="add_btn">Update Owners</button>	
		</form>

	<?php
				}
			}
		}
	?>


</body>
</html>