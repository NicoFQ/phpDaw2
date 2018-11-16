<?php 
	/**
	 * Esta clase representa una singleton de la conexion con la base de datos.
	 * -- ... o al menos lo estamos intentando... --
	 */

	class ConexionPadel
	{
		private static $instancia;
		private $bd;

		private function __construct()
		{
			/* NO FUNCIONA
 			global $bd_usuario;
			global $bd_contrasena;
			global $bd_nmBaseDatos;
			*/
			try {
				$this->bd = new PDO("mysql:host=localhost;dbname=proyecto_padel", "admin_padel","1234");		
			} catch (PDOException $e) {
				print "¡Error!: " . $e->getMessage() . "<br/>";
				die();
			}
			
		}
		
		public function conexion()
		{
			return $this->bd;
		}
		
		public static function getInstance()
		{
			if (!isset(static::$instancia)) {
		        $miclase = __CLASS__;
		        self::$instancia = new $miclase;
			}
        	return self::$instancia;
		}

		public function insertaDatos(string $nombre, string $jugadores){
			$pre = $this->bd->prepare("insert into clases (nombre, alumnos_serializados) values (?,?);");
			$pre->execute(array($nombre, $jugadores));
			echo $pre->rowCount();
			}

		public function recuperarDatos(){
			echo "Recup";
			$datos = [];
			$pre = $this->bd->prepare("select * from clases;");
			$pre->execute();
			while ($fila = $pre->fetch()) {
				$datos[] = $fila;
			}
			return $datos;
		}


		public function pintarDatos(ClasePadel $datos){

		}

	}

 ?>