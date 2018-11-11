<?php 
    require("./../src/conexion.php");

    $temaEncontrado = false;

    if (isset($_GET["tema"])) {
        
        $sentencia = $bd->prepare("select * from tema where id_tema = ?");
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
    <?php require("./src/head.php"); ?>
 	<section>
 		 <article>
            <?php if ($temaEncontrado){ ?>
                <section>
                    <?php $foro->pintarTema($tema, false, true);?>
                </section>
                <section>
                    <?php $foro->listarRespuesta($id);?>
                </section>
            <?php }else{ ?>         
                <p>No se puede visualizar el tema.</p>
            <?php } ?>

 		 </article>
 	</section>
 </body>
 </html>