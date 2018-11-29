<?php 
	require("./../src/IDatosFormulario.php");
	class ZonaDeMadrid implements IDatosFormulario{
		private $id;
		private $method;
		private $zona;
		private $errores;
		private $zonas = ["Centro","Norte", "Este", "Sur", "Oeste"];

		public function __constructor(string $id="zona-de-madrid", string $method="post"){
			$this->id = $id;
			$this->method = $method;
		}
	
		public function obtenerDatosFormulario($info)
		{
			$this->zona = $info;
		}	

		public function generarFormulario(){?>
			<form action="<?php echo 'testZonaDeMadrid.php' ?>" method="post">
				<select name="zona">
							<option  value="--">--</option>
						<?php foreach ($this->zonas as $zona): ?>
							<option  value="<?=$zona ?>" <?php if($this->zona == $zona){ echo 'selected';} ?>><?=$zona ?></option>
						<?php endforeach ?>
				</select>
			<input type="submit" name="enviar" value="envio">
			</form>
			<?php if ($this->contieneErrores()): ?>
				<div><?=$this->errores; ?></div>
			<?php endif ?>

		 <?php }

		public function contieneErrores(){
			if (isset($this->zona) && $this->zona == "--") {
				$this->errores = "No se ha seleccionado ninguna zona.";
			}else{
				$this->errores = null;	
			}
			return $this->errores;
		}
		}
 ?>