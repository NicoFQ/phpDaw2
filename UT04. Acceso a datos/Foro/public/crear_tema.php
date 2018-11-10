<?php 

	spl_autoload_register(function ($class) {
    $classPath = "../src/";
    require("$classPath${class}.php");
	});

	$datos = [
	"titulo" => "",
	"nombre" => "",
	"clave" => "",
	"etiqueta" => "",

	];
	
	if (isset($_POST["enviar"])) {

		$bd = SingleConexion::getInstance()->conexion();
	    $foro = new Foro($bd);
	    
		if (isset($_POST["titulo"])) {
			$datos["titulo"] = $_POST["titulo"];
		}
		if (isset($_POST["nombre"])) {
			$datos["nombre"] = $_POST["nombre"];
		}
		if (isset($_POST["clave"])) {
			$datos["clave"] = $_POST["clave"];
		}
		if (isset($_POST["etiqueta"])) {
			$datos["etiqueta"] = $_POST["etiqueta"];
		}
		
		$foro->crearTema($datos);


	} 



?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Crea un tema!
	</title>
</head>
<body>
	<head>
		<h1>
			¡Crea un tema!
		</h1>
	</head>
	<section>

		<form  action="./crear_tema.php" method="post">
			<label>
				Titulo:	<input type="text" name="titulo">
			</label>

			<label>
				Nombre:	<input type="text" name="nombre">
			</label>
			
			<br>
			
			<label>
				Clave:	<input type="password" name="clave">
			</label>
			
			<label>
				Etiqueta:	<input type="text" name="etiqueta">
			</label>

			<br>

			<input type="submit" name="enviar" value="Crear tema">
		</form>

	</section>
</body>
</html>