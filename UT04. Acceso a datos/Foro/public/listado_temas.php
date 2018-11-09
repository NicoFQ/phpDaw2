<?php 
	
	spl_autoload_register(function ($class) {
    $classPath = "../src/";
    require("$classPath${class}.php");
	});
    $bd = SingleConexion::getInstance();


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		ForoCode
	</title>
</head>
<body>
	<head>
		<h1>
			ForoCode
		</h1>
	</head>
	<nav>
		<span>
			A que esperas... 
		</span>
		<a href="./crear_tema.php">
			¡Crea un tema!
		</a>
	</nav>

	<section>
		
		

	</section>


</body>
</html>