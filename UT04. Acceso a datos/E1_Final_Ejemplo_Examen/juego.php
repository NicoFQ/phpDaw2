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
  if (isset($_POST["tablero"])) {
    
  }
  inicializaTablero($tablero);
  $turno = $_POST["turno"];
  $posX = $_POST["posx"];
  $posY = $_POST["posy"];
  if ($posX > 3 || $posX < 1) {
    $error = $turno ." Fuera de rango";
  }
    if ($posY > 3 || $posY < 1) {
    $error = $turno ." Fuera de rango";
  }
}

define("ALTO_ANCHO",3);

function inicializaTablero(&$tabla){
  $tabla[] =["","",""];
  $tabla[] =["","",""];
  $tabla[] =["","",""];
}

function victoria($tablero, $tipo){
  for ($i=0; $i < ALTO_ANCHO; $i++) { 
    $win = [$tipo, $tipo, $tipo];

    for ($x=0; $x < ALTO_ANCHO; $x++) { 
      $resultado = array_diff($tablero[$i], $win); 
      if (count($resultado == 0)) {
        return true;
      }
    }  

  }
  $acc = [];
  for ($i=0; $i < ALTO_ANCHO; $i++) {     
    array_push($acc, $tablero[$i][0]);
  }

  $resultado = array_diff($tablero[$i], $acc); 
      if (count($resultado) == 0) {
        return true;
      }

      $acc = [];
  for ($i=0; $i < ALTO_ANCHO; $i++) {     
    array_push($acc, $tablero[$i][1]);
  }
  
  $resultado = array_diff($tablero[$i], $acc); 
      if (count($resultado) == 0) {
        return true;
      }

            $acc = [];
  for ($i=0; $i < ALTO_ANCHO; $i++) {     
    array_push($acc, $tablero[$i][2]);
  }
  
  $resultado = array_diff($tablero[$i], $acc); 
      if (count($resultado) == 0) {
        return true;
      }
  
  $acc = [$tablero[0][0],$tablero[1][1],$tablero[2][2],];
   $resultado = array_diff($tablero[$i], $acc); 
      if (count($resultado) == 0) {
        return true;
      }
  $acc = [$tablero[0][2],$tablero[1][1],$tablero[0][0],];
       $resultado = array_diff($tablero[$i], $acc); 
      if (count($resultado) == 0) {
        return true;
      }
      return false;
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
      <input type="hidden" name="tablero" value="TODO_PONER_VALOR"><br>
      <button type="submit" name="submit" value="jugar">Jugar</button>
  </form>
</body>
</html>
