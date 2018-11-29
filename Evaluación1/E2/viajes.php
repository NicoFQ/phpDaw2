<?php

$origen = "";
$destino = "";
$tipo="";
$inicio = "";
$fin = "";
$promo = "";
$errores = [];
$checkI = "";
$checkIV = "";
$checkPrecio = "";
print_r($_POST);
if (isset($_POST["submit"])) {
    
    if (isset($_POST["origen"]) && isset($_POST["origen"]) != "-1") {
    $origen = $_POST["origen"];
    echo "$origen";
      
    }else{
     $errores[] = "no has elegido el origen" ;
    }
if (isset($_POST["destino"]) && isset($_POST["destino"]) != "-1") {
    $origen = $_POST["destino"];
      
    }else{
     $errores[] = "no has elegido el la vuelta" ;
      
    }
    if (isset($_POST["tipo"])) {
      $tipo = $_POST["tipo"];
      if ($tipo == "soloida") {
        $checkI = "checked";
      }else{
        $checkIV = "checked";
      }
      
    }else{
     $errores[] = "no has elegido ida o vuelta" ;
      
    }
    if (isset($_POST["precio"])) {
      $checkPrecio = "checked";
      
    }else{
     $errores[] = "no has aceptado las condiciones" ;
      
    }

$destino = "";
$inicio = "";
$fin = "";
$promo = "";

  }

$ciudades = [
  1001 => 'Madrid',
  2003 => 'Berlín',
  17004 => 'Maputo',
  20000 => 'Ciudad del cabo',
  14001 => 'New York'
];

$trayectos =
  [
    1001 => [2003 => 50, 20000 => 1059 ],
    2003 => [20000 => 1230, 17004 => 659 ],
  ];

?>

<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
  <meta charset="UTF-8">
  <title>Viaje</title>
</head>
<body>
  <form method="post">
    Origen:
    <select name="origen">
      <option value="-1">--</option>
      <option value="1">Madrid</option>
      <?php foreach ($ciudades as $key => $value): ?>
        <?php if ($value == $origen): ?>
          <option value="<?= $key ?>" selected><?= $value ?></option>
          
        <?php endif ?>
          <option value="<?= $key ?>"><?= $value ?></option>
      <?php endforeach ?>
    </select>
    Destino:
    <select name="destino">
      <option value="-1">--</option>
        <?php foreach ($ciudades as $key => $value): ?>
           <?php if ($value == $destino): ?>
          <option value="<?= $key ?>" selected><?= $value ?></option>
          
        <?php endif ?>
          <option value="<?= $key ?>"><?= $value ?></option>
      <?php endforeach ?>
    </select>
    <br/><br>
    Tipo de viaje:
    <br>
    <input type="radio" name="tipo" value="convuelta">Ida y vuelta<br>
    <input type="radio" name="tipo" value="soloida">Solo ida<br>
    <br>
    Salida:
    <input type="date" name="inicio"></input><br/>
    Vuelta:
    <input type="date" name="fin"></input><br/>
    <br/>

    He leído y acepto todo: <input type="checkbox" name="precio" placeholder="0.0"></input><br/>
    <br/>

    Promoción: <input type="text" name="promo" ></input><br/>
    <br/>


    <button type="submit" name="submit" value="enviar">Dime precio</button>
  </form>
  <?php foreach ($errores as $error): ?>
    <div><?=$error ?></div>
  <?php endforeach ?>
</body>
</html>
