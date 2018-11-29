<?php

/*
Debes definir una estructura adecuada para este problema
*/
$tablero = [];
    $turno = "";
    $posX = "";
    $posY = "";
    $error = "";

if (isset($_POST["submit"])) {
    $tablero = unserialize($POST["tablero"]);
    $posX = $_POST["posx"];
    $posY = $_POST["posx"];
    $posX = $_POST["posx"];
}
 




// Serialización del tablero
$tablero_serializado = htmlspecialchars(serialize($tablero));

?>

<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
  <title>3 en Raya</title>
</head>
<body>
  <h1>3 en raya</h1>
  <table>
    <?php 
      foreach ($tablero as $fila) {
        echo "<tr>";
        foreach ($fila as $col) {
          echo "<td>$col</td>";
        }
        echo "<tr>";
      }

     ?>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  <div class="error">
    <?=$error ?>
  </div>
  <div class="error">
    Jugador AAA ha ganado
    <a href="">Juego nuevo</a>
  </div>
  <form action="juego.php" method="post">
      turno:
      <select name="turno">
        <option value="X">X</option>
        <option value="O">O</option>
      </select>
      <br>
      x: <input type="text" name="posx" value=""><br>
      y: <input type="text" name="posy" value=""><br>
      <input type="hidden" name="tablero" value=" <?=$tablero_serializado ?>"><br>
      <button type="submit" name="submit" value="jugar">Jugar</button>
  </form>
</body>
</html>
