<?php 

	/**
	 * Esta clase representara un jugador para las clases 
	 *
	 */
	class Jugador
	{
		private $nombre;
		private $apellido;
		private $nivel;
		// De los alumnos se quiere guardar nombre, apellido y nivel (del 1 al 6)
		function __construct(string $nombre,string $apellido ,int $nivel)
		{
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->nivel= $nivel;
		}
	}

 ?>