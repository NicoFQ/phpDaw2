<?php 


	echo  "<table border='1'>";
      echo "<tr><th>Variable</th><th>Valor</th></tr>";
    foreach($_GET as $key => $val)
    {
      echo "<tr><td>$key</td><td>$val</td></tr>";
    }
	echo  "</table>";
 ?>