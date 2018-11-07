<?php 
	/*
	
	------- str_rot13 -------

(PHP 4 >= 4.2.0, PHP 5, PHP 7)

str_rot13 — Realiza la transformación rot13 sobre una cadena

string str_rot13 ( string $str )

Aplica la codificación ROT13 sobre el argumento str y devuelve la cadena resultante.

La codificación ROT13 simplemente desplaza cada letra en 13 posiciones en el alfabeto, mientras que deja todos los caracteres no-alfabéticos intactos. La codificación y la decodificación se realizan con la misma función, pasar una cadena codificada como argumento devolverá la versión original.

	*/

	// EJEMPLO:
	echo "Cifrando 'Nico' <br>";
	echo "Resultado... ";
	echo str_rot13('Nico'); // Avpb
	echo "<br>";
	echo "<br>";


	// 1
	echo " Se reciben los datos del cliente.";

	$usuario = "Nicolas";
	$contrasena = "#mi_Contraseña_852";
	echo "<br>";
	echo "Usuario: $usuario";
	echo "<br>";
	echo "Contraseña: $contrasena";
	echo "<br>";
	echo "<br>";

	echo "Se almacenan los datos cifrados en la base de datos.";
	$usuarioBBDD = str_rot13($usuario);
	$contrasenaBBDD = str_rot13($contrasena);
	echo "<br>";
	echo "Usuario: $usuarioBBDD";
	echo "<br>";
	echo "Contraseña: $contrasenaBBDD";
	echo "<br>";
	echo "<br>";
	

	// 2
	echo "Se reciben los datos cifrados del servidor 
		 y se decifran aqui para enviarlos al cliente 
		(en este caso solo el usuario).";
	echo "<br>";
	
	echo "Usuario cifrado que devuelve el servidor.";
	echo "<br>";
	echo "$usuarioBBDD";
	echo "<br>";

	echo "Usuario cifrado que se resuelve con str_rot13()";
	echo "<br>";
	
	echo str_rot13($usuarioBBDD);
	echo "<br>";echo "<br>";
	echo "Cifrado de ficheros";
	$cad = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
 	echo str_rot13($cad);
 	echo $cad;
 ?>
 