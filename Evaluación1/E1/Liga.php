<?php 
	spl_autoload_register(function ($class) {
    $classPath = "./";
    require("$classPath${class}.php");
	});

	/**
	 * 
	 */
	class Liga
	{
		private $equipos;
		private $partidos;
		function __construct()
		{
			$this->equipos= [];
			$this->partidos= [];
		}

		public function addEquipo($equipo){
			array_push($this->equipos , $equipo);
		}
		public function sorteaLiga(){
			$aleatorio = shuffle($this->equipos);
			$tamEquipos = count($this->equipos)-1;
			
			
			for ($x=0; $x < $tamEquipos; $x++) {
				for ($y=0; $y < $tamEquipos; $y++) { 
				

				do {
					$partido = new Partido($this->equipos[mt_rand(0,$tamEquipos)],
										$this->equipos[mt_rand(0,$tamEquipos)]);
					$partido2 = new Partido($this->equipos[mt_rand(0,$tamEquipos)],
										$this->equipos[mt_rand(0,$tamEquipos)]);
					
				} while ($partido->mismoPartido($partido2));
				
					$this->partidos[] = $partido;
				}
			}
		}
		public function generaTablaPartidos(){
			$tamPartidos = count($this->partidos);
			//echo $tamPartidos;
			//print_r($this->partidos[0]);
				 ?>
				<table border="1">
			<?php  for ($y=0; $y < $tamPartidos; $y++) { ?>
					
				<tr>
					<td><?=$this->partidos[$y]->getLocal()->getNombre() ?></td>
					<td><?=$this->partidos[$y]->getVisitante()->getNombre() ?></td>
				</tr>




			<?php }?>
				</table>
				 
			<?php 
		}
	}

 ?>