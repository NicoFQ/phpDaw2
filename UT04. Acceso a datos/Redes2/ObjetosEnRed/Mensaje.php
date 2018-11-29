<?php 
/*

Objetos - Redes
***************
El mismo concepto de convertir los objetos a flujo de bytes se puede utilizar
para enviar objetos a través de la red.

Realizar seguimiento de código de ejemplo

* Ejercicio 4 *
Crea dos programas basándote en el código de ejemplo de sockets, estos programas
intercambiarán información a través de la red.

1.- Crea la clase mensaje con la propiedad nombre y mensaje

2.- Crea un programa enviar que reciba por parámetro toda la información
    envia_info.php <dirección ip> <puerto> <nombre> <mensaje>
    envia_info.php 127.0.0.1 8080 Jorge "Hola mundo"

3.- Crea un servidor que cuando se ejecute espere recibir objetos tipo mensaje
    por cada uno que llegue muestre su contenido y conteste al cliente con 'OK'
    server_info.php 8080

*/

    class Mensaje{
    	public $nombre;
    	public $mensaje;

    	public function __construct($nombre, $mensaje){
    		$this->nombre= $nombre;
    		$this->mensaje= $mensaje;
    	}

        public function getNombre(){
            return $this->nombre;
        }
        public function getMensaje(){
            return $this->mensaje;
        }
    }


 ?>