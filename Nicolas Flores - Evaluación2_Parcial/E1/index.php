<?php

foreach($_COOKIE as $name => $valor) {
  setcookie($name, '', time()-1000);
  setcookie($name, '', time()-1000, '/');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Fibonacci Tour</title>
</head>
<body>
  <h1>Fibonacci Tour</h1>
  <p> 
    La sucesión de Fibonacci es una serie de números en la que cada elemento<br>
    se calcula con la suma de los dos anteriores.
    <div>0, 1</div>
    <div>0, 1, <b>1</b></div>
    <div>0, 1, 1, <b>2</b></div>
    <div>0, 1, 1, 2, <b>3</b></div>
    <div>0, 1, 1, 2, 3, <b>5</b></div>
    <div> etc ... </div>
    <div>0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144</div>
  </p>
  <p>
    En este ejercicio tienes que realizar varias páginas que vayan generando<br>
    esta serie de números. En cada visita se generará un número de la serie en <br>
    base a los dos números anteriores anteriores<br>
  </p>
  <p>
    Cada página recibe los datos con un método y los envía a la siguiente con otro.<br>
    <div>Las páginas son:<div>
    <ul>
      <li>01_get_post.php - Recibe por get y envía por post</li>
      <li>02_post_cookie.php - Recibe por post y envía a través de cookie</li>
      <li>03_cookie_session.php - Recibe por cookie y envía a través de sesión</li>
      <li>04_session_get.php - Recibe por cookie y envía a través de sesión</li>
    </ul>
  </p>
  <p>
    A través de los distintos métodos iremos arrastrando una serie de variables<br>
    cada una será un número de la serie de Fibonacci<br>
    <div>Primer envío:</div>
    <div>var1 = 0, var2 = 1</div>
    Segundo envío:
    <div>var1 = 0, var2 = 1, var3 = 1</div>
    Tercer envío:
    <div>var1 = 0, var2 = 1, var3 = 1, var3 = 2</div>
  </p>

  <p>
    La página actual: index.php tiene un enlace para arrancar la serie. luego <br>
    las página se visitaran en bucle:<br>
    <div>
    index.php -> 01_get_post.php<br>
    01_get_post.php -> 02_post_cookie.php<br>
    02_post_cookie.php -> 03_cookie_session.php<br>
    04_session_get.php -> 01_get_post.php<br>
    01_get_post.php -> 02_post_cookie.php <br>
    02_post_cookie.php -> 03_cookie_session.php<br>
    etc.
  </div><br>
    <div>Primer envío:</div>
    <div>var1 = 0, var2 = 1</div>
    Segundo envío:
    <div>var1 = 0, var2 = 1, var3 = 1</div>
    Tercer envío:
    <div>var1 = 0, var2 = 1, var3 = 1, var3 = 2</div>
  </p>
  <a href="01_get_post.php?var1=0&var2=1">Arranca!!</a>
  <p>
    <b>Puntos: 5</b>
    <ul>
      <li>01_get_post.php - 1 punto</li>
      <li>02_post_cookie.php - 1 punto</li>
      <li>03_cookie_session.php - 1.5 puntos</li>
      <li>04_session_get.php - 1.5 puntos</li>
    </ul>
  </p>
</body>
</html>
