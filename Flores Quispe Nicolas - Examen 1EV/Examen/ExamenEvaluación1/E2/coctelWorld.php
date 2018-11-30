
<?php

print_r($_POST);

?>

<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<form method="post">
	<div class="bloque">
    <div>Selecciona las bebidas alcohólicas</div>
		<input type="checkbox" name="bebida_alcohol[]" value="101"/>Ron<br/>
		<input type="checkbox" name="bebida_alcohol[]" value="102"/>Whisky<br/>
	</div>
  <div class="bloque">
    <div>Selecciona las bebidas</div>
		<input type="checkbox" name="bebida[]" value="201"/>Coca cola<br/>
		<input type="checkbox" name="bebida[]" value="202"/>Zumo de piña<br/>
	</div>
  <div class="bloque bloque-error">
    <div>Tipo:</div>
    <input type="radio" name="tipo" value="chupito"/>Chupito<br/>
    <input type="radio" name="tipo" value="coctel"/>Cóctel<br/>
    <input type="radio" name="tipo" value="sin_alcohol"/>Sin alcohol<br/>
	</div>
  <div class="bloque">
    <div>Datos</div>
    Nombre: <input type="text" name="nombre" placeholder="nombre de bebida"/><br/>
  </div>
  <div></div>
  <div class="error">
    Esto es un texto de error
  </div>
	<input class="enviar" type="submit" value="Enviar" />
</form>
<table>
  <tr>
    <th>Nombre</th>
    <th>Contenido</th>
    <th>Tipo</th>
  </tr>
  <tr>
    <td class="cocktail">Kalimotxo</td>
    <td class="contenido">
      <div>Alcohol</div>
      <ul>
        <li>Vino</li>
      </ul>
      <div>Sin alcohol</div>
      <ul>
        <li>Coca-cola</li>
      </ul>
    </td>
    <td><img src="img/coctel.png" /></td>
  </tr>
  <tr>
    <td class="cocktail">Cerebrito</td>
    <td class="contenido">
      <div>Alcohol</div>
      <ul>
        <li>Vodka</li>
        <li>Baileys</li>
      </ul>
      <div>Sin alcohol</div>
      <ul>
        <li>Granadina</li>
        <li>Lima</li>
      </ul>
    </td>
    <td><img src="img/chupito.png" /></td>
  </tr>
  <tr>
    <td class="cocktail">Multizumo</td>
    <td class="contenido">
      <div>Alcohol</div>
      <ul>
      </ul>
      <div>Sin alcohol</div>
      <ul>
        <li>Zumo piña</li>
        <li>Zumo naranja</li>
      </ul>
    </td>
    <td><img src="img/sinalcohol.png" /></td>
  </tr>
</table>
</body>
</html>
