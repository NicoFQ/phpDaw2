<?php 

	/* AUTOCARGA */

	spl_autoload_register(function ($class) {
    $classPath = "./";
    require("$classPath${class}.php");
	});


	/* Conexion con PDO */

	$conn = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);
	$conn = null;


	try {
	    $mbd = new PDO('mysql:host=localhost;dbname=proyecto_foro',
	     "admin_foro", "1234");
	    $mbd -> exec("SET CHARACTER SET utf8");

	    /* Punto de partida */

	    $sth = null;
	    $mbd = null;

	} catch (PDOException $e) {
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}

	/* CONSULTAS PREPARADAS */

	$sentencia = $mbd->prepare("INSERT INTO REGISTRY (name, value) VALUES (?, ?)");
	$sentencia->execute(array("a","b"));


	  // Iteración línea a línea

	  while ($fila = $sentencia->fetch()) {
	    print_r($fila);
	  }

	  // Obteniendo todo

	  $resultado = $sentencia->fetchAll();
	  foreach ($resultado as $fila){
	    print_r($fila);
	  }

		/*

		Tareas
		1.- Login como root
		$ mysql -u root -p

		2.- Crear base de datos
		mysql> CREATE DATABASE proyecto01_juan_de_la_cierva;

		3.- Crear usuario (Para nuevo usar cambia nombre y pass)
		mysql> CREATE USER 'juan'@'localhost' IDENTIFIED BY 'cierva1234';

		4.- Conceder privilegios al nuevo usuario
		GRANT ALL PRIVILEGES ON proyecto01_juan_de_la_cierva.* TO 'juan'@'localhost' WITH GRANT OPTION;

		*/

//Create a File

$my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file

//Open a File

$my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //open file for writing ('w','r','a')...

//Read a File

$my_file = 'file.txt';
$handle = fopen($my_file, 'r');
$data = fread($handle,filesize($my_file));

//Write to a File

$my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'This is the data';
fwrite($handle, $data);

//Append to a File

$my_file = 'file.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$data = 'New data line 1';
fwrite($handle, $data);
$new_data = "\n".'New data line 2';
fwrite($handle, $new_data);

//Close a File

$my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
//write some data here
fclose($handle);

//Delete a File

$my_file = 'file.txt';
unlink($my_file);

 ?>