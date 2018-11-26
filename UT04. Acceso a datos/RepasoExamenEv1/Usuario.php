<?php 

class Usuario {

	public $nombre;

	public $apellidos;
	public $email;
	public $contrasena;
	public $fechaNacimiento;
	public $ciudad;

	public $sexo;
	public $aplicaciones;
	public $marcas;

	public $errores;

	public function __construct($nombre,$apellidos,$email,$contrasena,$fechaNacimiento,$ciudad,$sexo,$aplicaciones  ,$marcas){
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->email = $email;
		$this->contrasena = $contrasena;
		$this->fechaNacimiento = $fechaNacimiento;
		$this->ciudad = $ciudad;
		$this->sexo = $sexo;
		$this->aplicaciones   = $aplicaciones  ;
		$this->marcas   = $marcas  ;
			}
	public function serializar(){
		return serialize($this);
	}

	public function pintarUsuarioServer(){
		echo "nombre: $this->nombre\n";
		echo "apellidos: $this->apellidos\n";
		echo "email: $this->email\n";
		echo "contrasena: $this->contrasena\n";
		echo "fechaNacimiento: $this->fechaNacimiento\n";
		echo "ciudad: $this->ciudad\n";
		echo "sexo: $this->sexo\n";
		$app = implode(' - ', $this->aplicaciones);
		echo "aplicaciones :". $app ."\n";
		$mar = implode(' - ', $this->marcas);
		echo "marcas :".$mar ."\n";
	}

}

 ?>