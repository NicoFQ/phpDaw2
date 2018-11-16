<?php 

	/**
	 * Esta clase representa una clase de padel con 4 alumnos y nombre de la pista.
	 */
	class ClasePadel 
	{
		use PitaPista;

		private string $nombre;
		private array $jugadores;

		function __construct(string $pista, array $jugadores)
		{
			$this->$nombre = $pista;
			$this->$jugadores = $jugadores;
		}
		
	}

 ?>