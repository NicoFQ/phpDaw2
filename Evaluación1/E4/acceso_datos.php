<?php

try {
    $mbd = new PDO('mysql:host=localhost;dbname=proyecto_foro',
     "admin_foro", "1234");
    $mbd -> exec("SET CHARACTER SET utf8");
    
    // Utilizar la conexión aquí
    $resultado = $mbd->query('SELECT * FROM cosas');

    foreach ($resultado as $fila){
      foreach ($fila as $clave => $valor){
        echo $clave . " " . $valor . "<br/>";
      }
      echo "--------------<br/>";
    }

    // Ya se ha terminado; se cierra
    $sth = null;
    $mbd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
