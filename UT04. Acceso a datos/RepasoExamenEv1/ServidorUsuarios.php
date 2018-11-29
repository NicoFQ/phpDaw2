<?php 
$colorGreen="\033[0;32m";
$colorClear="\033[0m";
	require("Usuario.php");
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
        //var_dump($contenido);
        $usuario = unserialize($contenido);

        $aviso = "Nuevo usuario: ";
        echo "$colorGreen";
        echo "$aviso$colorClear\n";
		$usuario->pintarUsuarioServer();

        echo "Contestando al cliente...\n";
        stream_socket_sendto($client, "OK: Usuario registrado");

        echo "Cerrando al cliente.\n";
        fclose($client);
        echo "Cerrando.\n\n\n";
    }
}

 ?>