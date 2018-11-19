<?php 
	spl_autoload_register(function ($class) {
		$classPath = "";
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
			$nombre = $datos["nombre"];
			$jugadores = $datos["alumnos_serializados"];
			$jugadores = unserialize($jugadores);
			echo count($jugadores);
			self::pintarTabla($nombre, $jugadores);
		}
		
		public static function pintarTabla(string $pista, array $jugadores){
			?>
			<?php  ?>
			<table>
				<caption><?= $pista ?></caption>
				<tr>
					<td></td>
					<td>
						<?= $jugadores[0]->getNombre(); ?>
						<br>
						<?= $jugadores[0]->getNivel(); ?>
					</td>
					<td>
						<?= $jugadores[1]->getNombre(); ?>
						<br>
						<?= $jugadores[1]->getNivel(); ?>
						
					</td>
					<td></td>
				</tr>

				<tr>
					<td></td>
					<td>
						<?= $jugadores[2]->getNombre(); ?>
						<br>
						<?= $jugadores[2]->getNivel(); ?>
						
					</td>
					<td>
						
						<?= $jugadores[3]->getNombre(); ?>
						<br>
						<?= $jugadores[3]->getNivel(); ?>
					</td>
					<td></td>
				</tr>
			</table>
			<?php 
		}
		
	}

 ?>