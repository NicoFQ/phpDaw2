<?php 
	include("./../src/inicia_sesion.php");
	$nombre = "undefined";
	session_start();
	if (isset($_SESSION['usuario'])) {
		$nombre = $_SESSION['usuario'];
	}else{
		header('Location: ./index.php');
		die();
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 </head>
 <body>
 	<div class="container">
 		<header>
 			<div class="row text-center">
 				<p class="col-md-2 card"><a href="./home.php">LOGO</a></p>
 				<p class="col-md-2 card"><a href="./home.php">Inicio</a></p>
 				<p class="col-md-3 card"><a href="./area_privada.php">Area privada</a></p>
 				<p class="col-md-2 card"><a href="./mi_perfil.php">Mi perfil</a></p>
 				<p class="col-md-3 card "><a href="./cerrar_sesion.php">Cerrar sesion</a></p>
 			</div>
 		</header>
 		<main>
 			<div class="jumbotron">
 				<h1 class="text-center">Bienvenido <?=$nombre?></h1>
 				<h2 class="text-center">Estas en Mi Perfil</h2>
 				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 			</div>
 		</main>
 		<footer class="border text-center">
 			FOTER
 		</footer>
 	</div>
 </body>
 </html>