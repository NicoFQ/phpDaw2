<?php
  session_start();
  include_once 'funciones.php';
  $numeros = $_COOKIE;
  $tamNum = count($numeros) -1 ;
  $aux3 = calculaSiguiente($numeros, true);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Fibonacci Tour</title>
</head>
<body>
  <h1>Fibonacci Tour</h1>
  <div>0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, etc.</div>

  <p>
    <div>-> GET -> POST -></div>
    <div>-> POST -> COOKIE -></div>
    <div><b>-> COOKIE -> SESSION -></b></div>
    <div>-> SESSION -> GET -></div>
  </p>


  <p>
    <?php 
      for ($i=0; $i < $tamNum; $i++) { 
        $x = $i+1;
        $var = "var" .$x;
        $_SESSION[$var] = $numeros[$var];
        echo "Establecida variable en sesión: $var, $numeros[$var]";
        echo "<br>";
      }
        $x = $tamNum+1;
        $var = "var" .$x;
        $_SESSION[$var] = $aux3;
        echo "Establecida variable en sesión: $var, $aux3";
        echo "<br>";


     ?>
  </p>
  <p>
    <a href="04_session_get.php">Siguiente!</a>
  </p>
  <p>
    <a href="index.php">Reinicia</a>
  </p>
</body>
</html>
