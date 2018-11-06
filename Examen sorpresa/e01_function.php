<?php 
	numeroPrimo($numero){
		$cont = 1;
		for ($i=2; $i <= $numero $i++) { 

			if ($numero%$i==0) {
				$cont++;
			}
		}

		return true;
	}
 ?>