<?php 

	
	spl_autoload_register(function ($class) {
    $classPath = "../src/";
    require("$classPath${class}.php");
	});

    $bd = SingleConexion::getInstance()->conexion();
    $foro = new Foro($bd);

    $sentencia = $bd->prepare("select * from tema where id_tema = ?");
    if (isset($_GET["tema"])) {
    	$id = intval($_GET["tema"]);
    	$sentencia->execute(array($id));
    	$tema = $sentencia->fetch();

	    if ($tema > 0) {	
	    	$temaEncontrado = true;
	    }
    	
    }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Ver tema
 	</title>
 </head>
 <body>
 	<head>
 		<h1>ForoCode</h1>
 	</head>
 	<section>
 		 <article>
 		 	<section>
 		 		
 		 	<?php $foro->pintarTema($tema, false, true, false);?>
 		 	</section>
 		 	<section>
 		 		
 		 		<?php $foro->listarRespuesta($id);?>

 		 	</section>

 		 </article>
 	</section>
 </body>
 </html>