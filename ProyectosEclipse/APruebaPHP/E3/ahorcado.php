<?php

/*
Debes definir una estructura adecuada para este problema
*/
$tablero = [];
// o
$tablero = new Tablero();




// Serialización del tablero
$tablero_serializado = htmlspecialchars(serialize($tablero));

?>

<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
  <title>Ahorcado</title>
</head>
<body>
  <div class="western">Ahorcado</div>
  <img src="img/ahorcado_0.png" />
  <div class="palabra">
    _A___H_
  </div>
  <div class="error">
    Esto es un texto de error
  </div>
  <div class="victoria">
    Has ganado!!
    <a href="">Juego nuevo</a>
  </div>
  <div>
    Ya has probado con:<br>
    A G H T S K
  </div>
  <form action="PONER_VALOR" method="post">
      Letra: <input type="text" name="letra" value=""><br>
      <input type="hidden" name="tablero" value="TODO_PONER_VALOR">
      <button type="submit" name="submit">Jugar</button>
  </form>
</body>
</html>
