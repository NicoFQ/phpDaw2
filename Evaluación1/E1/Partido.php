<?php 
	spl_autoload_register(function ($class) {
    $classPath = "./";
    require("$classPath${class}.php");
	});

	/**
	 * 
	 */
	class Partido
	{

		private $local;
		private $visitante;

		// Se omite el resultado
		public function __construct($local, $visitante)
		{
			$this->local = $local;
			$this->visitante = $visitante;
		}

		public function mismoPartido($partido){
			if ($this === $partido) {
				return true;
			}else {
				return false;
			}
		}

		public function getLocal(){
			return $this->local;
		}

		public function getVisitante(){
			return $this->visitante;
		}

	}

 ?>