<?php 
	spl_autoload_register(function ($class) {
		$classPath = "./src/";
		require("$classPath${class}.php");
	});
	/**
	 * Esta clase representa una clase de padel con 4 alumnos y nombre de la pista.
	 */
	class ClasePadel 
	{

		private  $nombre;
		private  $alumnos;

		function __construct(string $pista,  $jugadores)
		{
			$this->nombre = $pista;
			$this->alumnos = $jugadores;
		}

		public function serializarJugadores(){
			return serialize($this->alumnos);
		}
		public function reconstruirDatos(array $datos){
			$nombre = $datos[0]["nombre"];
			$jugadores = $datos[0]["alumnos_serializados"];
			$jugadores = unserialize($jugadores);
		}
		
		public static function pintarTabla(string $pista, array $jugadores){
			?>
			<?php  ?>
			<table>
				<caption><?= $pista ?></caption>
				<tr>
					<td>
						<?=jugadores[0] ?>
					</td>
					<td>
						<?=jugadores[1] ?>
						
					</td>
				</tr>

				<tr>
					<td>
						<?=jugadores[2] ?>
						
					</td>
					<td>
						
						<?=jugadores[3] ?>
					</td>
				</tr>
			</table>
			<?php 
		}
		
	}

 ?>