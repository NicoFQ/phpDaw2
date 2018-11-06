<!DOCTYPE html>
<html>
<head>
	<title>
		e2.12.php
	</title>
	<link rel="stylesheet" type="text/css" href="css/e2.12.css">
	<script src="./js/color.js"></script>
</head>
<body>
		
	<div id='papa'>
		<?php 
		function color() {
	    	return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
		}

		$tamPiramide = 10;
		
			for ($i=0; $i < $tamPiramide; $i++) { 
				for ($x=0; $x < $i+1; $x++) { 
					$colorX = color();
					echo "<div class='hijo' style='background-color:black'>";
					echo "</div>";
				}
				echo "<br>";
			}
		 ?>
	</div>


	 <center>
		 <button type="sumbit" onclick="cambioColor()">
		 	Color!
		 </button>
	 </center>

</body>
</html>