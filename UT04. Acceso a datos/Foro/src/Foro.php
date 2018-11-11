<?php  

	/**
	 * Esta clase dara la funcionalidad a la pagina web.
	 */

	class Foro
	{
		private $bd;

		private $tema = [
			"id_tema" => "",
			"titulo" => "",
			"nombre" => "",
			"clave" => "",
			"etiqueta" => "",
			"fecha" => "",
		];
		
		public function __construct($conexion)
		{
			$this->bd = $conexion;
		}

		public function listarTemas(string $orden, int $limite=10, int $offset=10)
		{
			/*	PREGUNTAR POR QUE NO FUNCIONA 
			echo "-->" .$orden;
			$sentencia = $this->bd->prepare("select * from tema order by ?;");
			echo "<br>";
			print_r($sentencia);
			$sentencia->execute(array($orden));
			echo "<br>";
			print_r($sentencia);
			*/

			if ($orden == "respuestas") {
				
				$sentencia = $this->bd->prepare("
select 
	tema.id_tema, tema.titulo, tema.nombre, tema.etiqueta, tema.fecha_publicacion ,count(respuesta.id_tema) as 'respuestas' 
from 
	tema 
left join 
	respuesta 
on 
	tema.id_tema =+ respuesta.id_tema 
group by 
	tema.id_tema;

");
				
			}else if ($orden == "fecha_publicacion"){
				$sentencia = $this->bd->prepare("select id_tema, titulo, nombre, etiqueta, fecha_publicacion from tema order by $orden desc;");
			}else{
				$sentencia = $this->bd->prepare("select * from tema order by $orden;");

			}

			$sentencia->execute();

			?>
			
			<section>
				<article>
					<table>
						<tr>
							<td>
								<a href="./listado_temas.php?&orderby=titulo">Titulo</a>
							</td>
							<td>
								<a href="./listado_temas.php?&orderby=nombre">Creador</a>
							</td>
							<td>
								<a href="./listado_temas.php?&orderby=etiqueta">Etiqueta</a>
							</td>
							<td>
								<a href="./listado_temas.php?&orderby=fecha_publicacion">Fecha de creacion</a>
							</td>
							<td>
								<a href="./listado_temas.php?&orderby=respuestas">Respuestas</a>
							</td>
						</tr>
				<?php 
					while ($datos = $sentencia->fetch()) {
						$datos["respuestas"] = $this->cantidadDeRespuestas($datos["id_tema"]);	
							$this->pintarTema($datos);
					}
				 ?>
					</table>
			
				</article>
			</section>

			<?php
		}



		public function pintarTema(array $tema, bool $borrar=true, bool $responder=true, $respuestas=true)
		{ 
		?>
			
			<tr>
				
				
					<td>
						<a href="./ver_tema.php?&tema=<?=$tema['id_tema']?>">
							<?=$tema["titulo"]?>
						</a>
					</td>
					<td><?=$tema["nombre"] ?></td>
					<td><?=$tema["etiqueta"] ?></td>
					<td><?=$tema["fecha_publicacion"] ?></td>

					
					<?php if($respuestas) {?>
					<td><?=$tema["respuestas"] ?></td>
					
					<?php } ?>
					<?php if($borrar) {?>
						<td>
							<a href="./borrar_tema.php?&tema=<?=$tema['id_tema']?>">Borrar</a>
						</td>
					<?php } ?>
						
					<?php if($responder) {?>
						<td>
							<a href="./crear_respuesta.php?&tema=<?=$tema['id_tema']?>">Responder</a>
						</td>
			</tr>
					<?php } ?>

		<?php
		}

		private function cantidadDeRespuestas(int $idTema)
		{
			$sentencia = $this->bd->prepare("select count(id_respuesta) as 'respuestas' from respuesta where id_tema=?;");
			$sentencia->execute(array($idTema));
			$numRespuestas = 0;

			if ($numRespuestas = $sentencia->fetch()) {
				$numRespuestas = $numRespuestas["respuestas"];
			}
			return $numRespuestas;
		}


		public function listarRespuesta(int $idTema, int $limite=10, int $offset=10)
		{
			$sentencia = $this->bd->prepare("select * from respuesta where id_tema=?;");
			$sentencia->execute(array($idTema));
				while ($datos = $sentencia->fetch()) {	
					$this->pintarRespuesta($datos);
				}
		}
		public function pintarRespuesta(array $tema)
		{ 
		?>

					<h4>
						<span><?=$tema["titulo"] ?></span>
					</h4>
					<span><?=$tema["usuario"] ?></span>
					<span><?=$tema["contenido"] ?></span>
					<br>
					<span><?=$tema["fecha_publicacion"] ?></span>
					<br>
		
		<?php
		}

		public function crearTema(array $datos)
		{
			$consulta = $this->bd->prepare("insert into tema (titulo, nombre, clave, etiqueta) values (:titulo, :nombre, :clave, :etiqueta)");

			if ($consulta->execute($datos)) {
				echo "datos introducidos.";
			}else{
				echo "datos NO introducidos.";

			}
		}

		public function crearRespuesta(array $datos)
		{
			echo "Se hace la respuesta";
			print_r($datos);
			$consulta = $this->bd->prepare("insert into respuesta (titulo, usuario, contenido, id_tema) values (:titulo, :usuario, :contenido, :id_tema)");

			if ($consulta->execute($datos)) {
				echo "datos introducidos.";
			}else{
				echo "datos NO introducidos.";

			}
		}

		
	}

?>