<?php 

/*
 * Text
 * Password
 * Select
 * Radio
 * Checkbox 
 * hidden
 */

$nombre = "";
$apellidos = "";
$email = "";
$contrasena = "";
$fechaNacimiento = "";

$sMadrid = "";
$sBarcelona = "";
$sMalaga = "";
$sSevilla = "";
$ciudad = "";

$checkHombre = "";
$checkMujer = "";
$sexo="";

$checkFace = "";
$checkTwi = "";
$checkInsta = "";
$checkWhat = "";
$aplicaciones = [];

$checkSony = "";
$checkSamsung = "";
$checkApple = "";
$checkHuawei = "";
$marcas = [];

$errores = [];

	if (isset($_POST["enviar"])) {


		if ($_POST["nombre"] == "") {
			$errores[] = "No se ha introducido el nombre!";
		}else{
			$nombre = $_POST["nombre"];
			
		}

		if ($_POST["apellidos"] == "") {
			$errores[] = "No se ha introducido los apellidos!";
		}else{
			$apellidos = $_POST["apellidos"];
		}

		if ($_POST["email"] == "") {
			$errores[] = "No se ha introducido el email!";
		}else{
			$email = $_POST["email"];
		}

		if ($_POST["contrasena"] == "") {
			$errores[] = "No se ha introducido la contraseña!";
		}else{
			$contrasena = $_POST["contrasena"];
		}

		if ($_POST["fechaNacimiento"] == "") {
			$errores[] = "No se ha introducido la fecha de nacimiento!";
		}else{
			$fechaNacimiento = $_POST["fechaNacimiento"];
		}


		if (!isset($_POST["ciudad"])) {
			$errores[] = "No se ha seleccionado ninguna ciudad!";
		}else{

			if ($_POST["ciudad"] == "Madrid") {
				$sMadrid = "selected";
			}
			if ($_POST["ciudad"] == "Barcelona") {
				$sBarcelona = "selected";
			}
			if ($_POST["ciudad"] == "Malaga") {
				$sMalaga = "selected";
			}
			if ($_POST["ciudad"] == "Sevilla") {
				$sSevilla = "selected";
			}
			$ciudad = $_POST["ciudad"];
		}


		if (isset($_POST["sexo"])) {

			if ($_POST["sexo"] == "hombre") {
				$checkHombre = "checked";
			}

			if ($_POST["sexo"] == "mujer") {
				$checkMujer = "checked";
			}
			$sexo = $_POST["sexo"];

		}else{
			$errores[] = "No se ha seleccionado el sexo";
		}

/*
DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
	id_tema INT AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(120),
	apellidos VARCHAR(20),
	email VARCHAR(20),
	contrasena VARCHAR(20),
    fecha_nacimiento date,
    ciudad VARCHAR(50),
    sexo VARCHAR(10),
    aplicaciones VARCHAR(800),
    marcas VARCHAR(800),
    ciudad VARCHAR(20),
	fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
	) ENGINE=INNODB;
    
select * from usuario;*/

		if (isset($_POST["face"])) {
			$checkFace = "checked";
			$aplicaciones[] = $_POST["face"];
		}

		if (isset($_POST["twi"])) {
			$checkTwi = "checked";
			$aplicaciones[] = $_POST["twi"];
		}

		if (isset($_POST["insta"])) {
			$checkInsta = "checked";
			$aplicaciones[] = $_POST["insta"];
		}

		if (isset($_POST["what"])) {
			$checkWhat = "checked";
			$aplicaciones[] = $_POST["what"];
		}
		$aplicacionesSerialize = serialize($aplicaciones);
		$aplicacionesSerialize = serialize($aplicaciones);


		if (isset($_POST["Sony"])) {
			$checkSony = "checked";
			$marcas[] = $_POST["Sony"];
		}

		if (isset($_POST["Samsung"])) {
			$checkSamsung = "checked";
			$marcas[] = $_POST["Samsung"];
		}

		if (isset($_POST["Apple"])) {
			$checkApple = "checked";
			$marcas[] = $_POST["Apple"];
		}

		if (isset($_POST["Huawei"])) {
			$checkHuawei = "checked";
			$marcas[] = $_POST["Huawei"];
		}
		$marcasSerialize = serialize($marcas);
		

//	echo date("Y-m-d");
	}

	if (count($errores) == 0 && isset($_POST["enviar"])) {
		$conn = new PDO('mysql:host=localhost;dbname=proyecto_foro', "admin_foro", "1234");
		$sentencia = $conn->prepare("insert into usuario 
			(nombre, apellidos, email, contrasena, fecha_nacimiento, ciudad, sexo, aplicaciones,marcas) 
			values
			(?,?,?,?,?,?,?,?,?)");
		$datos = array($nombre,$apellidos,$email,$contrasena,$fechaNacimiento,$ciudad, $sexo, $aplicacionesSerialize, $marcasSerialize);
		print_r($datos);
		$sentencia->execute($datos);

		print_r($sentencia->errorInfo());
		$conn = null;
	}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		SuperForm
 	</title>
 </head>
 <body>
 	<h1>Registro</h1>
 	<form action="SuperForm.php" method="post">
 		<label>Nombre<input type="text" name="nombre" value="<?=$nombre ?>"></label>
 		<br>
 		<label>Apellidos<input type="text" name="apellidos" value ="<?=$apellidos ?>"></label>
 		<br>
 		<label>email<input type="text" name="email" value ="<?=$email ?>"></label>
 		<br>
 		<label>contrasena<input type="password" name="contrasena" value ="<?=$contrasena ?>"></label>
 		<br>
 		<label>fecha nacimiento<input type="date" name="fechaNacimiento" value ="<?=$fechaNacimiento ?>"></label>
 		
 		<br>
 			Ciudad:
 		<select name="ciudad" >
 			 	<option value="--" selected disabled>--</option>
 			 	<option value="Madrid" 		<?=$sMadrid?>		>Madrid</option>
 			 	<option value="Barcelona"	<?=$sBarcelona?>	>Barcelona</option>
 			 	<option value="Malaga" 		<?=$sMalaga?>		>Malaga</option>
 			 	<option value="Sevilla" 	<?=$sSevilla?>		>Sevilla</option>

 		</select>
 		<br>
 		Sexo
 		<br>
 		<label>Hombre<input type="radio" name="sexo" value="hombre" <?=$checkHombre ?>></label>
		<label>Mujer<input type="radio" name="sexo" value="mujer" <?=$checkMujer ?>></label>
		<br>
		<br>

		Aplicaciones favoritas
 		<br>
		<label>Facebook<input type="radio" name="face" value="Facebook" <?=$checkFace ?> ></label>
		<label>Twitter<input type="radio" name="twi" value="Twitter" <?=$checkTwi ?>></label>
		<label>Instagram<input type="radio" name="insta" value="Instagram" <?=$checkInsta ?>></label>
		<label>WhatsApp<input type="radio" name="what" value="WhatsApp" <?=$checkWhat ?>></label>
		<br>
		<br>
		Marcas favoritas
 		<br>
		<label>Sony<input type="checkbox" name="Sony" value="Sony" <?=$checkSony ?> ></label>
		<label>Samsung<input type="checkbox" name="Samsung" value="Samsung" <?=$checkSamsung ?>></label>
		<label>Apple<input type="checkbox" name="Apple" value="Apple" <?=$checkApple ?>></label>
		<label>Huawei<input type="checkbox" name="Huawei" value="Huawei" <?=$checkHuawei ?>></label>
		<input type="hidden" name="oculto" value="$oculto">
		<br>
		<br>
		<input type="submit" name="enviar" value="enviar">
 	</form>
 	<?php foreach ($errores as $error): ?>
 		<p><?=$error ?></p>
 	<?php endforeach ?>
 </body>
 </html>