<?php

print_r($_POST);

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
    </select>
    Destino:
    <select name="destino">
      <option value="-1">--</option>
      <option value="1">Mozambique</option>
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


    <button type="submit" name="submit">Dime precio</button>
  </form>
</body>
</html>
