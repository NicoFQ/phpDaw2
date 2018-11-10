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

		public function pintarTema(array $tema, bool $borrar=true)
		{ 
		?>
			<article>
					<h4><?=$tema["titulo"]?></h4>
					<span><?=$tema["nombre"] ?></span>
					<span><?=$tema["etiqueta"] ?></span>
					<span><?=$tema["fecha_publicacion"] ?></span>
					<?php if($borrar) {?>
						<span>
							<a href="./borrar_tema.php?&tema=<?=$tema['id_tema']?>">Borrar</a>
						</span>
						<span>
							<a href="./ver_tema.php?&tema=<?=$tema['id_tema']?>">Ver</a>
						</span>
					<?php } ?>
					<br>
			</article>

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