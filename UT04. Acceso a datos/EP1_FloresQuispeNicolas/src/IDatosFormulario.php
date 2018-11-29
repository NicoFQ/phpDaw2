<?php 

	interface IDatosFormulario{
		
		public function __constructor(string $it, string $method);
		public function obtenerDatosFormulario($datos);
		public function generarFormulario();
		public function contieneErrores();
		}


 ?>