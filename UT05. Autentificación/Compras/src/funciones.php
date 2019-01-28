<?php 
	function generateToken($length = 30)
	{
    	return bin2hex(random_bytes($length));
	}

	function generaFecha($dia=0, $horas=0, $min=0, $seg=0){
		$diaHoy = date("Y-m-d");
		$nuevafecha = strtotime ("+$dia day", strtotime($diaHoy));
		$nuevafecha = date ("Y-m-d", $nuevafecha); 
		$hora = new DateTime();
		$hora->modify('+' . $horas . ' hours');
		$hora->modify('+' . $min . ' minute');
		$hora->modify('+' . $seg . ' second');
 		return $nuevafecha . " " . $hora->format("H:i:s");
	}


 ?>