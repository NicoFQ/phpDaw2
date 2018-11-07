<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="./procesa.php">
		<p>Variable</p>
		<?php 
		if (isset($_GET['error'])) {
			
			if ($_GET['error'] == true) {
				echo "<p>ERROR</p>";
			}
		}

		 ?>
		<label><input type="text" name="Campo1"></label>
		
		<input type="text" name="Nombre">
		<input type="text" name="Apellido">
		<input type="submit" name="Envia">
	</form>
</body>
</html>