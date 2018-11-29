<?php 
	require("IDatosFormulario.php");
	class Usuario implements IDatosFormulario{
		private $dni;
		private $email;
		private $fechaNacimiento;
		private $nombre;
		private $apellidos;
		private $sexo;
		private $sexM="";
		private $sexF="";
		private $errores =[];



		public function __constructor(string $id="zona-de-madrid", string $method="post"){
			$this->id = $id;
			$this->method = $method;
		}
	
		public function obtenerDatosFormulario($info)
		{
			print_r($info);
			$this->dni = $info["dni"];
			$this->email = $info["email"];
			$this->fechaNacimiento = $info["fechaNacimiento"];
			$this->nombre = $info["nombre"];
			$this->apellidos = $info["apellidos"];
			if (isset($info["sexo"])) {
			$this->sexo = $info["sexo"];
			}


		}	

		public function generarFormulario(){?>
			<form action="testUsuario.php" method="post">
				DNI<input type="text" name="dni"  value="<?=$this->dni ?>"><br>
				Email<input type="text" name="email"  value="<?=$this->email ?>"><br>
				Fecha Nacimiento<input type="text" name="fechaNacimiento"  value="<?=$this->fechaNacimiento ?>"><br>
				Nombre<input type="text" name="nombre"  value="<?=$this->nombre ?>"><br>
				Apellidos<input type="text" name="apellidos"  value="<?=$this->apellidos ?>"><br>
				<?php if ($this->sexo=="Masculino"): ?>
					<?php $this->sexM ="checked"; ?>
				<?php endif ?>
				<?php if ($this->sexo=="Femenino"): ?>
					<?php $this->sexF ="checked"; ?>
				<?php endif ?>
				
				Sexo <input type="radio" name="sexo" value="Masculino" <?=$this->sexM ?>><br>
				<input type="radio" name="sexo" value="Femenino" <?=$this->sexF ?>><br>
			<input type="submit" name="enviar" value="envio">
			</form>
			<?php $this->contieneErrores(); ?>
			<?php if (count($this->errores)>0): ?>
				<div>
					<?php foreach ($this->errores as $error): ?>
						<p><?=$error; ?></p>
					<?php endforeach ?>
				</div>
			<?php endif ?>

		 <?php }

		public function contieneErrores(){

			if (!isset($this->nombre)) {
				$this->errores[] = "Falta nombre";
			}
			if (!isset($this->email)) {
				$this->errores[] = "Falta email";
			}
			if (!isset($this->fechaNacimiento)) {
				$this->errores[] = "Falta fechaNacimiento";
			}
			return $this->errores;
		}
	}	

 ?>