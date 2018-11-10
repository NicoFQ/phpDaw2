<?php 

	spl_autoload_register(function ($class) {
    $classPath = "../src/";
    require("$classPath${class}.php");
	});

    $temaEncontrado = false;
    $temaBorrado = false;
    $mensajeErr = "";

    $bd = SingleConexion::getInstance()->conexion();
    $foro = new Foro($bd);

    if (isset($_POST["borrar"])) {
    	if (isset($_POST["clave"])) {
    		if (isset($_GET["id"])) {
	    		$sentencia = $bd->prepare("delete from tema where id_tema= ? and clave= ?");
	    		$idPost = intval($_GET["id"]);
	    		$sentencia->execute(array($idPost,$_POST["clave"]));

	    		if ($sentencia->rowCount() > 0) {
	    			$temaBorrado = true;
	    		}
    		}
    	}
    }


    $sentencia = $bd->prepare("select * from tema where id_tema = ?");
    if (isset($_GET["tema"])) {
    	$id = intval($_GET["tema"]);
    	$sentencia->execute(array($id));
    	$tema = $sentencia->fetch();

	    if ($tema > 0) {	
	    	$temaEncontrado = true;
	    }
    	
    }
    

    if (!$temaEncontrado && !isset($_POST["borrar"])){
		$mensajeErr = "Lo sentimos, el tema no esta disponible.";
	} else {
		if ($temaBorrado && isset($_POST["borrar"])){ 
			$mensajeErr = "Se ha borrado el tema";
		} else {
			$mensajeErr = "No se ha podido borrar el tema.";
		}
	} 
	  

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Borrar tema
 	</title>
 </head>
 <body>
 	<article>
 		<section>
 			<h1>Borrar tema</h1>
 			
 				<?php if ($temaEncontrado){ ?>

 					<?php $foro->pintarTema($tema, false);?>
 					
	 				<form action="./borrar_tema.php?&id=<?= $_GET['tema'] ?>" method="post">
	 					<label>
	 						Introuzca la clave para borrar el tema.
	 						<input type="password" name="clave">
	 					</label>
	 					<label>
	 					</label>
	 					<label>
	 						<input type="submit" name="borrar" value="Borrar">
	 					</label>
	 				</form>
 				
 				<?php } else {?>
					<p><?=$mensajeErr ?></p>
 				<?php } ?>

 		</section>
 	</article>
 </body>
 </html>