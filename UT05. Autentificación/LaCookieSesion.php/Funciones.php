<?php 

	function obten_o_crea_sesion(&$id, &$data)
	{
		if ($sesion = tieneSesion()) {
			$id = $sesion;
			$data = recuperaSesion($sesion);
		}else{
			nuevaSesion();
		}
	}
	/**
	* Esta funcion crea una cookie nueva en caso de que
	* algun usuario se presente sin una. Tambien guarda 
	* datos de una sesion por defecto */
	function nuevaSesion(){
		$vidaCookie = 200;
		$data = ["nombre"=>"Anonimo", "musica" => [], "colores" => ["colorFondo"=>"silver","colorFuente"=>"black"]];
		// Se crea la cookie que necesita ser sesion.
		$idAleatorio = idAleatorio();
		setcookie("mi_sesion", $idAleatorio , time()+$vidaCookie);
		
		/** Se guarda el fichero con la identificacion y
		* 	datos predeterminados. **/
		guarda_sesion($idAleatorio, $data);
		header("Location: CookieSesion.php");
	}

	/**
	* Esta funcion guardara los datos de una 
	* sesion y si no existe creara una sesion 
	* con el $id y pondra los datos por defecto que
	* se le pase como parametro*/
	function guarda_sesion($id, $data)
	{
		$sesion = "./sesiones/".$id.".sesion";
		$manejador = fopen($sesion, 'w') or die('No se ha podido guardar la sesion: '.$sesion);
		$datosSerializados = serialize($data);
		fwrite($manejador, $datosSerializados);
	}
	
	/**
	* Esta funcion permite recuperar los datos de 
	* una sesion guardada en ./sesiones/. Recupera
	* los datos serializados y devuelve los datos 
	* deserializados 
	*/
	function recuperaSesion(string $id)
	{
		try{

			$sesion = "./sesiones/".$id.".sesion";
			if (!file_exists($sesion)) {	
				throw new Exception("No se encontro el archivo de seion.");
			}
			$manejador = fopen($sesion, 'r');
			$data = fread($manejador,filesize($sesion));
			return unserialize($data);
		}catch(Exception $e){
			nuevaSesion();
		}
		
	}


	/**
	* Esta funcion devolvera true si encuentra
	* una cookie con nombre "mi_sesion" y false
	* en caso contrario
	*/
	function tieneSesion()
	{
		$laTiene = false;
		if (isset($_COOKIE["mi_sesion"])) {
			$laTiene = $_COOKIE["mi_sesion"];
		}	
		return $laTiene;
	}


	function idAleatorio(){
		$aleatorio1 = mt_rand(10000, 30000);
		$aleatorio2 = mt_rand(10000, 30000);
		$aleatorio3 = mt_rand(10000, 30000);
		return "$aleatorio1-$aleatorio2-$aleatorio3";
	}
 ?>