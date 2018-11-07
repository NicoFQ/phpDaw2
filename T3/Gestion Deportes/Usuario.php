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
		$this->resultado = $this->resultado+$this->compruebaResultado($this->getResultado() + $res, $this->getResultado());
	}

	private function compruebaResultado($resultado, $resultadoAnterior)
	{										//0       1
		$this->compruebaNivel($resultado);
		$res;
		if ($resultado < 0) {
			if ($resultado > $resultadoAnterior) {
				echo "Has roto la racha de derrotas";
				$res = 1;	
			}else{
				$res = -1;	
			}

		}elseif ($resultado > 0) {
				if ($resultado < $resultadoAnterior) {
				echo "Has roto la racha de victorias";
				$res = -1;	
			}else{
				$res = +1;	
			}
		}
		else{
			echo "ATT: $this->resultado <br>";
			echo "VAR: $resultado <br>";
			$res = $resultado;
		}
		return $res;

	}
	private function compruebaNivel($resultado)
	{

		if ($resultado == self::RESULTADO_MINIMO) {

				if ($this->getNivel()>self::NIVEL_MINIMO) {
					$this->setNivel($this->getNivel()-1);
					$this->resultado=0;
					echo "Bajas de nivel";
				}

		} elseif ($resultado == self::RESULTADO_MAXIMO) {
			
				if ($this->getNivel() < self::NIVEL_MAXIMO) {
					$this->setNivel($this->getNivel()+1);
					$this->resultado=0;
					echo "Subes de nivel";
				}

		}

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