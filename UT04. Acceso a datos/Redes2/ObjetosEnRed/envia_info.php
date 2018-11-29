<?php 
$colorGreen="\033[0;32m";
$colorClear="\033[0m";

require("Mensaje.php");

$addr = gethostbyname($argv[1]);
$puerto = $argv[2];
$nombre = $argv[3];
$mensaje = $argv[4];
$obj = new Mensaje($nombre, $mensaje);
        echo $obj->getNombre();
        echo $obj->getMensaje();

$obj = serialize($obj);

$servidor = stream_socket_client("tcp://$addr:$puerto", $errno, $errorMessage);

if ($servidor === false) {
    throw new UnexpectedValueException("Failed to connect: $errorMessage");
    die();
}

echo "Enviando información...\n";
stream_socket_sendto($servidor, $obj);

// Cerramos la conexión de envío
stream_socket_shutdown($servidor, STREAM_SHUT_WR);

$infoServer = stream_get_contents($servidor);
echo "Server dice: $colorGreen$infoServer$colorClear\n";

echo "Cerramos la conexión\n";
fclose($servidor);

 ?>