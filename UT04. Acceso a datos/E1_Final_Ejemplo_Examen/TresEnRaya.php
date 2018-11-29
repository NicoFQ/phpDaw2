    <?php

    /*
    Debes definir una estructura adecuada para este problema
    */

    $tablero = [];
    $px ="";
    $py="";
    $jugador = "X";
    $jx = "";
    $jo = "";
    $tablaRecuperada = "";
    $errores = [];
    if (isset($_POST["submit"])) {
      $px = $_POST["posx"];
      $py = $_POST["posy"];
      $jugador = $_POST["jugador"];

      if ($jugador == "X") {
        $jx = "selected";
      }
      
      if ($jugador == "O") {
        $jo = "selected";
      }
      $tablaRecuperada = $_POST["serializ"];
      $tablero = unserialize($tablaRecuperada);

      $errores = introducir($tablero, $px, $py, $jugador);

    }else{

      for ($x=0; $x < 3; $x++) { 
        $tablero[] = [];
        for ($y=0; $y < 3; $y++) { 
          $tablero[$x][$y] = "&nbsp;";
        }
      }

    }

    function introducir(&$tablero,$x, $y, $dato){
      $errores = [];
      if ($x < 0 || $x > 4) {
        $errores[] = "Posision x fuera de rango";
      }
      
      if ($y < 0 || $y > 4) {

        $errores[] = "Posision y fuera de rango";
      }
      if (count($errores) == 0) {
        $x--;
        $y--;
        if ($tablero[$x][$y] == "&nbsp;") {
         $tablero[$x][$y] = $dato;
         if (esVictoria($tablero,$dato)) {
           echo "<h1 class='victoria'>Victoria</h1>";
         }
       }else{
        $errores[] = "Casilla ocupada";
      }
    } 
    return $errores;
    }

    function esVictoria($tablero, $dato){
      $comp = $dato;
      $fila = $dato.$dato.$dato;

      for ($x=0; $x < 3; $x++) { 
        $tres = [];
        for ($y=0; $y < 3; $y++) { 
          $tres[] = $tablero[$x][$y];
        }
        if (implode("", $tres) == $fila) {
          return true;
        }

      }

      for ($x=0; $x < 3; $x++) { 
        $tres = [];
        for ($y=0; $y < 3; $y++) { 
          $tres[] = $tablero[$y][$x];
        }

        if (implode("", $tres) == $fila) {
          return true;
        }
      }
      $tres = [];
      for ($i=0; $i < 3; $i++) { 
        $tres[] = $tablero[$i][$i];
      }

      if (implode("", $tres) == $fila) {
        return true;
      }
      $tres = [];

      $tres[] = $tablero[0][2];
      $tres[] = $tablero[1][1];
      $tres[] = $tablero[2][0];

      if (implode("", $tres) == $fila) {
        return true;
      }

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
        <?php foreach ($tablero as $key): ?>
          <tr>
            <?php foreach ($key as $k): ?>
              <td><?=$k ?></td>
            <?php endforeach ?>


          </tr>
        <?php endforeach ?>
      </table>
      <div class="error">
        <?php foreach ($errores as $error): ?>
          <p><?=$error ?></p>
        <?php endforeach ?>

      </div>
      <div class="error">
        <a href="">Juego nuevo</a>
      </div>
      <form action="TresEnRaya.php" method="post">
        turno:
        <select name="jugador">
          <option value="X" <?=$jx ?>>X</option>
          <option value="O" <?=$jo ?>>O</option>
        </select>
        <br>
        x: <input type="text" name="posx" value="<?=$px ?>"><br>
        y: <input type="text" name="posy" value="<?=$py ?>"><br>
        <input type="hidden" name="serializ" value="<?=$tablero_serializado ?>"><br>
        <button type="submit" name="submit" value="jugar">Jugar</button>
      </form>
    </body>
    </html>
