Conexión PHP - PDO
============================

Ventajas:
.- Fácil cambio de motor de base de datos
.- Implementa un interfaz común para todas las bases de datos

Desventajas:
.- No implementa funcionalidad específica de cada motor


Establecer/Cerrar conexión
*****************************
<?php
$mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);

// Uso

$mbd = null;
?>

Se recomienda su uso con excepciones:
<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);

    // Uso

    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>


Consultas preparadas
*****************************
<?php

$user=$_POST['usuario'];
$pass=$_POST['pass'];
$sql="SELECT * FROM usuarios WHERE user = '$user' AND password='$pass'";

?>
Problema de SQLi

Las consultas preparadas solucionana este problema

<?php
// Con nombre
$sentencia = $mbd->prepare("INSERT INTO REGISTRY (name, value) VALUES (:name, :value)");
$sentencia->bindParam(':name', $nombre);
$sentencia->bindParam(':value', $valor);


// Sin nombre de parámetro
$sentencia = $mbd->prepare("INSERT INTO REGISTRY (name, value) VALUES (?, ?)");
$sentencia->bindParam(1, $nombre);
$sentencia->bindParam(2, $valor);


// insertar una fila
$nombre = 'uno';
$valor = 1;
$sentencia->execute();
?>

Obtención de valores
<?php
$sentencia = $mbd->prepare("SELECT * FROM REGISTRY where name = ?");
if ($sentencia->execute(array($_GET['name']))) {

  // Iteración línea a línea
  while ($fila = $sentencia->fetch()) {
    print_r($fila);
  }

  // Obteniendo todo
  $resultado = $sentencia->fetchAll();
  foreach ($resultado as $fila){
    print_r($fila);
  }
}
?>





Otros temas
***************

Conexiones persistentes
<?php
$mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña, array(
    PDO::ATTR_PERSISTENT => true
));
?>
http://php.net/manual/es/features.persistent-connections.php


Transacciones
Principio ACID
Atomicidad, Consistencia, Aislamiento y Durabilidad
https://es.wikipedia.org/wiki/ACID
<?php
$mbd->beginTransaction();

// Cosas

$mbd->commit();
// o
$mbd->rollBack();
?>
http://php.net/manual/es/pdo.transactions.php
