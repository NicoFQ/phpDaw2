<?php 
	$usuario = "";
	$contrasena = "";
	$err = [];
	if (isset($_GET["err"])) {
		$err = unserialize($_GET["err"]);
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Login
 	</title>
 </head>
 <body>

<h3>
Tarea 7: Login malamente
</h3>
<p>
NOTA: Este login está muy mal implementado, solo se hace así para entender la
problemática.
Puedes basarte en el login con base de datos.
</p>
<p>
Crea un login que confíe en una cookie de usuario para determinar si el usuario
está logueado. La cookie se llamará "usuario" y tendrá el nombre de usuario
que ha iniciado sesión.
</p>
<p>
Crea una sección con información privada y si el usuario no está logueado (no
existe la cookie) será redirigido al área de login.
</p>
<p>
¿Qué problema hay al confiar en la información del usuario?
</p>
<p>
Bonus: Crea un botón para salir dentro del área privada.
</p>
<p>
Próximamente: La cookie que quiere ser sesión.
</p>
 	<form action="contenido.php" method="post">
 		<label>Usuario<input type="text" name="usuario" value="<?=$usuario?>"></label>
 		<br><br>
 		<label>Constraseña<input type="password" name="contrasena" value="<?=$contrasena?>"></label>
 		<br><br>
 		<input type="submit" name="enviar" value="enviar">
 	</form>
 	<?php foreach ($err as $dato => $valor): ?>
 		<p><?=$valor ?></p>
 	<?php endforeach ?>
 </body>
 </html>
