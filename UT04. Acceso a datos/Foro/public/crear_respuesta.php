<?php 

	spl_autoload_register(function ($class) {
    $classPath = "../src/";
    require("$classPath${class}.php");
	});

    $bd = SingleConexion::getInstance()->conexion();
    $foro = new Foro($bd);

    $datos = [
		"titulo" => "",
		"usuario" => "",
		"contenido" => "",
		"id_tema" => 0,
	];

    		
    $id = "";
    if (isset($_GET["tema"])) {
    	$id = $_GET["tema"];
    }

    if (isset($_POST["enviar"])) {
    	


	    	$datos["id_tema"]= intval($id);

	    	if (isset($_POST["titulo"])) {
				$datos["titulo"] = $_POST["titulo"];
			}
			if (isset($_POST["usuario"])) {
				$datos["usuario"] = $_POST["usuario"];
			}
			if (isset($_POST["contenido"])) {
				$datos["contenido"] = $_POST["contenido"];
			}

			$foro->crearRespuesta($datos);
	   	
	    
    }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Crear respuesta
 	</title>
 </head>
 <body>
 	<head>
 		<h1>
 			ForoCode
 		</h1>
 	</head>
 	<section>
 		<article>
 			<h4>Responder</h4>
			<form  action="./crear_respuesta.php?&tema=<?=$id?>" method="post">
				<label>
					Titulo:	<input type="text" name="titulo">
				</label>
				<br>
				<label>
					Su nombre:	<input type="text" name="usuario">
				</label>
				
				<br>
				
				<label>
					Contenido:
					<br>
					<textarea name="contenido">
						
					</textarea>
				</label>

				<br>

				<input type="submit" name="enviar" value="responder">

			</form>
 		</article>
 	</section>
 </body>
 </html>