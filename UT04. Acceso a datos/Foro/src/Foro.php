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

		public function listarTemas(int $limite=10, int $offset=10)
		{
			$stmt = $this->bd->query("select * from tema;");
			
				while ($datos = $stmt->fetch()) {	
					$this->pintarTema($datos);
				}
		}

		public function pintarTema(array $tema, bool $borrar=true, bool $responder=true)
		{ 
		?>
					<h4><a href="./ver_tema.php?&tema=<?=$tema['id_tema']?>"><?=$tema["titulo"]?></a></h4>
					<span><?=$tema["nombre"] ?></span>
					<span><?=$tema["etiqueta"] ?></span>
					<span><?=$tema["fecha_publicacion"] ?></span>
					<?php if($borrar) {?>
						<span>
							<a href="./borrar_tema.php?&tema=<?=$tema['id_tema']?>">Borrar</a>
						</span>
					<?php } ?>
						
					<?php if($responder) {?>
						<span>
							<a href="./crear_respuesta.php?&tema=<?=$tema['id_tema']?>">Responder</a>
						</span>
					<?php } ?>
					<br>
		

		<?php
		}

		public function listarRespuesta(int $limite=10, int $offset=10)
		{
			$stmt = $this->bd->query("select * from respuesta;");
			
				while ($datos = $stmt->fetch()) {	
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

		
	}

?>