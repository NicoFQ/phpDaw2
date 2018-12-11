<?php 

/*
* Manejador de cookies.
* - Formulario 
* - crear y borrar
*
* Listado de cookies
* - Listar clave valor
*/
	//print_r($_COOKIE);
	$nombreCookie = "";
	$valorCookie = "";
	$vidaCookie = "";
	$errorForm = [];
	/*
	* */
	if (isset($_POST["enviar"])) { 
		if ($_POST["nombreCookie"] === "") {
			$errorForm[] = "Nombre de la cookie vacio";
		}else{
			$nombreCookie = limpiarCokie($_POST["nombreCookie"]);
			echo $nombreCookie;
		}
		
		if ($_POST["valorCookie"] === "") {
			$errorForm[] = "Valor de la cookie vacio";
		}else{
			$valorCookie = cleanInput($_POST["valorCookie"]);
		}

		if ($_POST["vidaCookie"] === "") {
			$vidaCookie = 0;
		}else{
			$vidaCookie = $_POST["vidaCookie"]+0 ;
		}

		if (count($errorForm) === 0) {
			setcookie($nombreCookie, $valorCookie, time()+$vidaCookie);
			//echo "Cookie creada.";
			header("Location: Creacion-ListadoCookies.php");
		}else{
			//echo "no se ha podido crear la cookie";
		}
	}
	if (isset($_GET["eliminar"])) {
		$eliminarCookie = $_GET["eliminar"];
		if (isset($_COOKIE[$eliminarCookie])) {
			setcookie($eliminarCookie, "", 0);
			header("Location: Creacion-ListadoCookies.php");
		}
	}

	function limpiarCokie($cookie){
		$caracteresProhibidos = array("\'", "=", ",", ";", "\t", "\r", "\n", "\013", "\014", " ");
		$cookieLimpia = str_replace($caracteresProhibidos, "", $cookie);
		return $cookieLimpia;
	}
	function cleanInput($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Listado Cookies
 	</title>
 </head>
 <body>
 	<h4>Tarea 4</h4>
 	<p>	
		Realiza una página que muestre el lista de cookies y permita establecer y borrar
		cookies con un tiempo en segundos de duración.
	</p>
	
 	<h4>Manejador de cookies</h4>
 	<form action="Creacion-ListadoCookies.php" method="post">
 		<label>Nombre de la cookie: <input type="text" name="nombreCookie" value="<?=$nombreCookie?>"></label>
 		<br>
 		<label>Valor de la cookie:<input type="text" name="valorCookie" value="<?=$valorCookie?>"></label>
 		<br>
 		<label>Tiempo de vida de la cookie(segundos):<input type="text" name="vidaCookie" value="<?=$vidaCookie?>"></label>
 		<br>
 		<input type="submit" name="enviar" value="envio">
 	</form>
 	<?php foreach ($errorForm as $err => $value): ?>
		<div>
			<?=$value?>
		</div>
	<?php endforeach ?>
 	<table border="1" align="center">  
 		 		<tr>
 			<th>
 				Nombre de la Cookie
 			</th>
 			<th>
 				Valor de la cookie
 			</th>
 			<th>
 				Eliminar la cookie
 			</th>
 		</tr>
 	<?php foreach ($_COOKIE as $cookie => $crumb): ?>
 		<tr>
 			<td>
 				<?=$cookie?>
 			</td>
 			<td>
 				<?=$crumb?>
 			</td>
 			<td>
 				<a href="Creacion-ListadoCookies.php?eliminar=<?=$cookie?>">Eliminar</a>
 			</td>
 		</tr>
 	<?php endforeach ?>

 	</table>
 	<?php if (count($_COOKIE)===0): ?>
 		<p align="center">No se han encontrado cookies</p>
 	<?php endif ?>
 </body>
 </html>