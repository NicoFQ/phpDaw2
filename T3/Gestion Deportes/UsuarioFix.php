<?php 

	class Usuario
	{
		private $nombre;
		private $apellidos;
		private $deporte;
		private $nivel;
		private $resultado;
		
		const RESULTADO_MINIMO=-6;
		const RESULTADO_MAXIMO=6;	
	
		const NIVEL_MINIMO=0;
		const NIVEL_MAXIMO=6;	
	

	public function __construct()
	{

		$this->nombre="Sin nombre";
		$this->apellidos="Sin apellidos";
		$this->deporte="Sin deporte";
		$this->nivel=0;
		$this->resultado=0;
	}
	
	public function introducirResultado($resultado)
	{
		$res;
		switch (strtolower($resultado)) {
			case 'victoria':
				echo "Winer <br>";
				$res = +1;
				break;
			case 'derrota':
				echo "Loser <br>";
				$res = -1;
				break;
			case 'empate':
				echo "Empater <br>";
				$res = 0;
				break;
		}

	}

	private function compruebaResultado($resultado, $resultadoAnterior, $nivel)
	{										//0       1

		


	}
	private function compruebaNivel($resultado)
	{



	}

	public function getResultado()
	{
		return $this->resultado;
	}


	public function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}


	public function setApellidos($apellidos)
	{
		$this->apellidos=$apellidos;
	}

	public function setDeporte($deporte)
	{
		$this->deporte=$deporte;
	}
	
	private function setNivel($nivel)
	{

		$this->nivel=$nivel;
	}

	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function getApellidos()
	{
		return $this->apellidos;
	}
	
	public function getDeporte()
	{
		return $this->deporte;
	}
	
	public function getNivel()
	{
		return $this->nivel;
	}
	
	public function imprimirInformacion()
	{
		echo "Nombre: " . $this->getNombre() ."<br>";
		echo "Apellidos: ". $this->getApellidos() ."<br>";
		echo "Deporte: " . $this->getDeporte() ."<br>";
		echo "Nivel: ". $this->getNivel() ."<br>";	
		echo "Resultado: ". $this->getResultado() ."<br>";	
	}

}
	$user = new Usuario();
	$user -> setNombre("Nicoo");
	$user -> setApellidos("FQ");
	$user -> setDeporte("Futbol");
	$user-> imprimirInformacion();
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("derrota");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> introducirResultado("victoria");
	$user-> imprimirInformacion();

 ?>