<?php 

	trait EscribeJSON
	{
		public function printJSON()
		{
			echo json_encode($this->datos);
		}
	}
	interface IEstructuraDeDatos
	{
		public function vaciar();
		public function estaVacia();
		public function introduce($valor);
		public function sacar();
	}

 ?>