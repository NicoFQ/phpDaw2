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
			return serialize(array($this->alumnos));
		}
		public function reconstruirDatos(array $datos){
			$nombre = $datos["nombre"];
			$jugadores = $datos["alumnos_serializados"];
			$jugadores = unserialize($jugadores);
			var_dump($jugadores);
			//self::pintarTabla($nombre, $jugadores);
		}
		
		public static function pintarTabla(string $pista, array $jugadores){
			?>
			<?php  ?>
			<table>
				<caption><?= $pista ?></caption>
				<tr>
					<td>
						<?php var_dump($jugadores[0]); ?>
					</td>
					<td>
						<?php var_dump($jugadores[1]); ?>
						
					</td>
				</tr>

				<tr>
					<td>
						<?php var_dump($jugadores[2]); ?>
						
					</td>
					<td>
						
						<?php var_dump($jugadores[3]); ?>
					</td>
				</tr>
			</table>
			<?php 
		}
		
	}

 ?>