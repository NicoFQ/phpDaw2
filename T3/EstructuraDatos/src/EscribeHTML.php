<?php 


	trait EscribeHTML
	{
		public function printHTML(){

		echo "<table border='1'>";
		$tamDatos = sizeof($this->datos);
		echo "<tr>";

			for ($y=0; $y < $tamDatos; $y++) { 
				echo "<td>";
				echo $this->datos[$y];	
				echo "</td>";
			}

		echo "</tr>";
		echo "</table>";	
		}
	}

 ?>