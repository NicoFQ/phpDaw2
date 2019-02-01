<?php
    //session_id(session_create_id());
    /*
    $_SESSION = array();
      if (isset($_CCOKIE['PHPSESSID'])) {
        setcookie('PHPSESSID', "",time()-9999, "/");
      }
      //session_destroy();
      //session_unset();*/
include_once 'funciones.php';
 
    $numeros = $_GET;
    $numVars =  count($numeros);
    $nuevoNumero = 0;
    $anterior = $numVars -2;
    $ultimo = $numVars-1;
    $aux1 = 0;
    $aux2 = 0;
    $aux3 = calculaSiguiente($numeros);
    echo $numVars;

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
    <div><b>-> GET -> POST -></b></div>
    <div>-> POST -> COOKIE -></div>
    <div>-> COOKIE -> SESSION -></div>
    <div>-> SESSION -> GET -></div>
  </p>
  <p>
    <form action="02_post_cookie.php" method="post">
      <!--
      <input type="text" name="var1" value="0" readonly ></br>
      <input type="text" name="var2" value="1" readonly ></br>
      <input type="text" name="var3" value="1" readonly ></br>
      -->

      <?php for ($i=0; $i < $numVars; $i++) { 
        $x = $i+1;
        $var = "var" . $x;
        ?>
         <input type="text" name="var<?=$i+1?>" value="<?=$numeros[$var]?> " readonly ></br>

          <?php  }  ?>

        <input type="text" name="var<?=$ultimo+2?>" value="<?=$aux3?> " readonly ></br>

      <input type="submit" value="enviar" />
    </form>
  </p>
  <p>
    <a href="index.php">Reinicia</a>
  </p>
</body>
</html>
