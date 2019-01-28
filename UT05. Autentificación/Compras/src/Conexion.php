<?php 
	include 'funciones.php';
	class Conexion 
	{
		private static $instancia;
		private $pdo;
		private function __construct()
		{
			try {
				$this->pdo = new PDO("mysql:host=localhost;dbname=proyecto_padel", "admin_padel", "1234");	
				$this->pdo->exec("SET CHARACTER SET utf8");
			} catch (PDOException $e) {
				print "¡Error!: " . $e->getMessage() . "<br/>";
				die();
			}
		}

	    public function prepare(string $sql)
	    {
	        return $this->pdo->prepare($sql);
	    }
		 
		public static function singleton_conexion()
		{
	       if (!isset(self::$instancia)) {
	            $miclase = __CLASS__;
	            self::$instancia = new $miclase;
	        }
	        return self::$instancia;
		}
	}

 ?>