<?php 
	require_once("./config/config.php");
	/**
	 * Esta clase representa una singleton de la conexion con la base de datos.
	 * -- ... o al menos lo estamos intentando... --
	 */
	class SingleConexion 
	{
		private static $instancia;
		private $bd;

		private function __construct()
		{
			$user = global $bd_usuario;
			$pass = global $bd_contrasena;
			$nmbd = global $bd_nmBaseDatos;
			try {
				$this->bd; = new PDO('mysql:host=localhost;dbname=$nmbd', $user, $pass);		
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

	}

 ?>