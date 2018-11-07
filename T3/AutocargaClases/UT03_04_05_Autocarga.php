Auto carga de clases

1.- Cada clase en un fichero
2.- Común hacer require de cada fichero
  Nos lleva a tener en el index un montón de require
  require 'File1.php';
  require 'File2.php';
  require 'File3.php';

3.- Si no existe ocurre un error

$product = new Product();
         |
         v
  ¿Product existe?
  Sí /        \ No
Creo el      ERROR
objeto

4.- Capturamos el error

$product = new Product();
         |
         v
  ¿Product existe?
  Sí /        \ No
Creo el      Ejecuta autoload
objeto        ¿Sabemos crearlo?
              Sí /      \ No
            creamos       ERROR

creamos index.php

<?php
spl_autoload_register(function ($class) {
    $classPath = "./";
    // en nuestros proyectos
    // ../src/
    // o la ruta a la raíz del proyecto
    require("$classPath${class}.php");
});

$p = new Product();
echo $p->id;
?>

Error. No existe la clase

creamos Product.php
<?php
class Product
{
  public $id = 42;
}
?>

Todo ok

5.- Cuando el proyecto es muy grande se suelen meter las clases en espacios
de nombres. Similar a los paquetes Java
¿Cómo lo cargamos?

Estructura de ficheros
src/
  NS1
    Clase1
    Clase2
  NS2
    Clase1
    Clase2
index.html

Fichero en src/App1/Product.php
<?php

namespace App1;
class Product
{
    public $id = 42;
}

?>

Fichero en src/App2/User.php
<?php
namespace App2;
class User
{
    public $id = 17;
}
?>
Fichero en public/index.php
<?php

spl_autoload_register(function ($class) {
    $classPath = "./";
    $file = str_replace('\\', '/', $class);
    require("$classPath${file}.php");
});

$p = new App1\Product();
$u = new App2\User();
echo $p->id . "    " $u->id;

?>

6.-
Pregunta abierta
¿Por qué no tiene un comportamiento por defecto?
Filosofía
https://es.wikipedia.org/wiki/Convenci%C3%B3n_sobre_configuraci%C3%B3n
https://en.wikipedia.org/wiki/Convention_over_configuration
