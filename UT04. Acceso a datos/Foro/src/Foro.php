<?php  

	/**
	 * Esta clase dara la funcionalidad a la pagina web.
	 */

	class Foro
	{
		private $bd;

		private $tema = [
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
			

				//echo "listando temas..";
				
				//print_r($stmt);
				while ($datos = $stmt->fetch()) {	
					$this->tema["titulo"] = $datos['titulo'];	
					$this->tema["nombre"] = $datos['nombre'];	
					$this->tema["clave"] = $datos['clave'];	
					$this->tema["etiqueta"] = $datos['etiqueta'];	
					$this->tema["fecha"] = $datos['fecha_publicacion'];	

					$this->pintarTema($this->tema);
				}
		}

		private function pintarTema(array $tema)
		{ 
		?>
			<article>
					<h4><?=$tema["titulo"]?></h4>
				
					<span><?=$tema["nombre"] ?></span>
					<span><?=$tema["clave"] ?></span>
					<span><?=$tema["etiqueta"] ?></span>
					<span><?=$tema["fecha"] ?></span>

					<br>
			</article>

		<?php
		}

		public function crearTema(array $datos)
		{
			echo "temaaaa";
			$consulta = $this->bd->prepare("insert into tema (titulo, nombre, clave, etiqueta) values (:titulo, :nombre, :clave, :etiqueta)");

			if ($consulta->execute($datos)) {
				echo "datos introducidos.";
			}else{
				echo "datos NO introducidos.";

			}
		}

		
	}

?>