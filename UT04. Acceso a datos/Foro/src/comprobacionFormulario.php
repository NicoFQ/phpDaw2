<?php 

	function comprobacionFormaulario(array $form)
	{
		if (isset($form["enviar"])) {
			echo "Enviado";
		}else{
			echo "Sin datos"
		}
	}

 ?>