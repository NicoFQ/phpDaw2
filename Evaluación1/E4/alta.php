<?php

try {

          
        $mbd = new PDO('mysql:host=localhost;dbname=proyecto_foro',
         "admin_foro", "1234");
        $mbd -> exec("SET CHARACTER SET utf8");
       
      
        $sentencia = $mbd->prepare("select id,nombre from supermercados");
          $sentencia->execute();
          $datos = $sentencia->fetchAll();
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
  <title>Alta</title>
</head>
<body>
  <form action="listado.php" method="post">
    Super
    <select name="super">
        <?php foreach ($datos as $key => $value): ?>
          <option value="<?=$value['id'] ?>"><?=$value["nombre"] ?></option>
 
        <?php endforeach ?>
    </select>
    <br/>
    <input type="text" name="nombre" placeholder="Nombre producto"></input><br/>
    <textarea name="desc" placeholder="Descripción producto"></textarea><br/>
    <input type="numeric" name="precio" placeholder="0.0"></input><br/>
    <button type="submit" name="submit" value="enviar">Alta</button>
  </form>
</body>
</html>
