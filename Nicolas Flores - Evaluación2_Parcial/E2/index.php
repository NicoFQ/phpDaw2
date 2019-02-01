<?php ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio 2</title>
</head>
<body>
  <h1>Ejercicio 2</h1>
  <p>
    Bienvenido al ejercicio de examen!
  </p>
  <p>
    Debes implementar un acceso con usuario-contraseña y un token<br>
    No hay base de datos la información está en dos arrays en la página control_acceso.php<br>

    <div>Las páginas son:<div>
    <ul>
      <li>index.php - Esta página</li>
      <li>set_cookie.php - YA IMPLEMENTADA - Establece una cookie y redirige a control_acceso.php</li>
      <li>control_acceso.php - Debes implementar acceso por login o por cookie</li>
      <li>privado.php - Debes implementar que sea un área privada</li>
    </ul>

    <div>Las información de acceso es:<div>
      <table>
        <tr>
          <th>usuarios</th>
          <th>password</th>
          <th>token</th>
        </tr>
        <tr>
          <td>usuario1</td>
          <td>1234</td>
          <td>ab16f363835143b6a0705b9eca22c27a85bab33f7a801bdcf8f2b06b44bf</td>
        </tr>
        <tr>
          <td>usuario2</td>
          <td>4321</td>
          <td>612b3675bcdb08d67bb02a5eebf095a88a82764316dde093d53786fee0a6</td>
        </tr>
      </table>
  </p>
  <h3>Clásico</h3>
  <form action="control_acceso.php" method="post">
      <!-- Username -->
      <label for="name">Username:</label></br>
      <input type="name" name="login"></br>
      <!-- Password -->
      <label for="username">Password:</label></br>
      <input type="password" name="pass"></br>
      <input type="submit" name="acceso_login" value="Login">
  </form>
  <h3>Token</h3>
  <form action="set_cookie.php" method="post">
      <!-- Username -->
      <label for="name">Username:</label></br>
      <input type="name" name="login"></br>
      <!-- Token -->
      <label for="name">Valor de token</label></br>
      <input type="text" name="token"></br>
      <input type="submit" name="acceso_token" value="Set token">
  </form>
  <h3>Probar acceso</h3>
  <a href="privado.php">Link al área privada</a>
  <p>
    <b>Puntos: 5</b>
    <ul>
      <li>Área privada - 1 punto</li>
      <li>Acceso por login - 1.5 puntos</li>
      <li>Acceso por token - 1.5 puntos</li>
      <li>Salir - 1 punto</li>
    </ul>
  </p>
</body>
</html>
