<?php

      try {

          
        $mbd = new PDO('mysql:host=localhost;dbname=proyecto_foro',
         "admin_foro", "1234");
        $mbd -> exec("SET CHARACTER SET utf8");
       
        if($_POST["submit"]) {
           $sentencia = $mbd->prepare("insert into productos (nombre, descripcion, precio, id_super) VALUES
          (?,?,?,?);");
           $sentencia->execute(array($_POST["nombre"],$_POST["desc"],$_POST["precio"],$_POST["super"],));
        }
        //print_r($sentencia->errorInfo());
       // $sentencia = $mbd->prepare("select  from productos ");
        //$sentencia->execute(array("a","b"));
        $mbd = null;

      } catch (PDOException $e) {
          print "¡Error!: " . $e->getMessage() . "<br/>";
          die();
      }


  


?>

<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
  <meta charset="UTF-8">
  <title>Listado</title>
</head>
<body>
<a href="alta.php"> + Nuevo producto</a>
<table>
  <tr>
    <th>Nombre</th>
    <th id="desc">Descripción</th>
    <th>Precio</th>
    <th>Super</th>
  </tr>
  <tr>
    <td>Algo</td>
    <td>Cosa muy interesante</td>
    <td>1.0</td>
    <td>DelBarrio <span class="bloque">&nbsp;</span></td>
  </tr>
</table>
</body>
</html>
