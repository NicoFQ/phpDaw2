<?php

/*
Debes definir una estructura adecuada para este problema
*/
/**
 * Ahorcado
 */
class Ahorcado
{
  public $palabraAhorcado;
  public $palabraOculta;
  public $letrasDichas;
  public $palabrasDisponibles = ["JAMON","LAPIZ","GOMA", "COCHE"];
  public $errores = [];
  public $numError=0;
  public $hasGanado = false;
  function __construct()
  {
    shuffle($this->palabrasDisponibles);
    $this->palabraAhorcado = $this->palabrasDisponibles[mt_rand(0,count($this->palabrasDisponibles)-1)];
    for ($x=0; $x < strlen($this->palabraAhorcado); $x++) { 
      $this->palabraOculta = $this->palabraOculta . "_" ;
    }
  }
  public function probarLetra($letra)
  {
    $letra = strtoupper($letra);
    if (empty($letra)) {
      $this->errores[] = "No has introducio nada";
    }else{
      if (strlen($letra) > 1) {
        $this->errores[] = "Has introducido mas de una letra";
      }else{

        if (strpos($this->letrasDichas, $letra) !== false) {
              $this->errores[] = "Ya has dicho esa letras";
        }else{
          $this->letrasDichas = $this->letrasDichas. $letra ." ";
          $let = strpos($this->palabraAhorcado, $letra);
          if ($let !== false) {
                $this->palabraOculta[$let] = $this->palabraAhorcado[$let];
                if ($this->palabraOculta === $this->palabraAhorcado) {
                  $this->hasGanado = true;
                }
          }else{
            $this->numError++;
          }
        }
      }
    }
  }
  public function resetErrores(){
    $this->errores = [];
  }
}

//$tablero = [];
// o
$letraDicha = "";
if (isset($_POST["submit"])) {
  $letraDicha = $_POST["letra"];
  $tablero = unserialize($_POST["tablero"]);
  $tablero->resetErrores();
  $tablero->probarLetra($letraDicha);

}else{
  $tablero = new Ahorcado();
}
/*
$s = "joder";
$a = "ppppp";
$s[3] = $a[1];
echo $s;
*/


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
  <img src="img/ahorcado_<?=$tablero->numError?>.png" />
  <div class="palabra">
    <?php 
foreach (explode(" ", $tablero->palabraOculta) as $key => $value) {
    echo $value;
}
     ?>
  </div>
  <div class="error">
    <?php foreach ($tablero->errores as $key => $value): ?>
      <?php echo $value; ?>
    <?php endforeach ?>
  </div>
  <div class="victoria">
    <?php if ($tablero->hasGanado): ?>

      Has ganado!!
      <a href="">Juego nuevo</a>
    
      
    <?php endif ?>
  </div>
  <div>
    Ya has probado con:<br>
    <?=$tablero->letrasDichas ?>
  </div>
  <form action="ahorcado.php" method="post">
      Letra: <input type="text" name="letra" value="<?=$letraDicha ?>"><br>
      <input type="hidden" name="tablero" value="<?=$tablero_serializado ?>">
      <button type="submit" name="submit">Jugar</button>
  </form>
</body>
</html>
