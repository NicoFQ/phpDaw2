<?php 
$colorGreen="\033[0;32m";
$colorClear="\033[0m";
	require("Mensaje.php");
	$server = stream_socket_server("tcp://127.0.0.1:1337", $errno, $errorMessage);

if ($server === false) {
    throw new UnexpectedValueException("Could not bind to socket: $errorMessage");
}

while (true) {
    $client = stream_socket_accept($server);

    if ($client) {
        
        echo "Nuevo cliente!\n";
        echo "Recibiendo info de cliente...\n";
        $contenido = stream_get_contents($client);
        var_dump($contenido);
        $contenido = unserialize($contenido);
        var_dump($contenido);
        
        $nombre = $contenido->getNombre();
        $mensaje = $contenido->getMensaje();

        $aviso = "Nuevo mensaje: ";
        echo "$colorGreen";
        echo "$aviso$colorClear\n";
        echo "Nombre: $nombre\n";
        echo "Mensaje: $mensaje\n";


        echo "Contestando al cliente...\n";
        stream_socket_sendto($client, "OK");

        echo "Cerrando al cliente.\n";
        fclose($client);
        echo "Cerrando.\n\n\n";
    }
}

 ?>