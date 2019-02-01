<?php
    session_start();
  include_once 'funciones.php';
  $numeros = $_SESSION;
  $tamNum = count($numeros) ;
  $aux3 = calculaSiguiente($numeros);
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
    <div>-> COOKIE -> SESSION -></div>
    <div><b>-> SESSION -> GET -></b></div>
  </p>

  <p>

    <?php
    $cadena = "" ;
      for ($i=0; $i < $tamNum; $i++) { 
        $x = $i+1;
        $var = "var" . $x;
        $cadena = $cadena.$var."=".$numeros[$var]."&";
        echo $cadena;
        echo "<br>";
      }
        $x = $tamNum+1;
        $var = "var" .$x;
        $cadena = $cadena . $var . "=" . $aux3."&";
        echo $cadena;
        echo "<br>";

     ?>
  </p>
  <p>
    <a href="01_get_post.php?<?=$cadena ?>">Siguiente!</a>
  </p>
  <p>
    <a href="index.php">Reinicia</a>
  </p>
</body>
</html>
