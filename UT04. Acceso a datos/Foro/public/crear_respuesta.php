<?php 

	require("./../src/conexion.php");
    require("./../src/richtexteditor/include_rte.php");

    $datos = [
		"titulo" => "",
		"usuario" => "",
		"contenido" => "",
		"id_tema" => 0,
	];
    		
    $id = "";
    $hayTema = false;

    if (isset($_GET["tema"])) {
    	$id = $_GET["tema"];
    	$hayTema = true;
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
				echo $_POST["contenido"];
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
 	<?php require("./../src/head.php"); ?>
 	<section>
 		<?php if ($hayTema){ ?>
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


						<?php 
							$editorHTML = new RichTextEditor();
							 //$editorHTML->Text="Type here"; 
			               // Set a unique ID to Editor   
			                $editorHTML->ID="contenido";    
			                $editorHTML->MvcInit();   
			                // Render Editor 
			                echo $editorHTML->GetString();  
						 ?>

					</label>

					<br>

					<input type="submit" name="enviar" value="responder">
				</form>
	 		</article>

 		<?php }else{?>

 			<article>
 				<p>
 					No has seleccionado ningun tema.
 				</p>
 			</article>

 		<?php }?>
 	</section>
 </body>
 </html>