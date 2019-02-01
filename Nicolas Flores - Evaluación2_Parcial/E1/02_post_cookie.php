<?php
include_once 'funciones.php';

  $numeros = $_POST;
  $tamNum = count($numeros);
  //print_r($numeros);
  echo "<br>";
  $aux3 = calculaSiguiente($_POST);
  echo $aux3;
  $var = 'var'.$tamNum;
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
    <div><b>-> POST -> COOKIE -></b></div>
    <div>-> COOKIE -> SESSION -></div>
    <div>-> SESSION -> GET -></div>
  </p>


  <p>
    <?php 
    for ($i=0; $i < $tamNum; $i++) { 
        $x = $i+1;
        $var = "var" . $x;
      establecerCookie($var, $numeros[$var]);
      echo "Establecida COOKIE: $var, $numeros[$var]";
      echo "<br>";
    }
    $x = $tamNum + 1;
    $var = "var" . $x;
      establecerCookie($var, $aux3);
      echo "Establecida COOKIE: $var, $aux3";
     ?>

  </p>
  <p>
    <a href="03_cookie_session.php">Siguiente!</a>
  </p>
  <p>
    <a href="index.php">Reinicia</a>
  </p>
</body>
</html>
