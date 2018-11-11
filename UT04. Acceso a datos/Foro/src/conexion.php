<?php 
	spl_autoload_register(function ($class) {
	    $classPath = "./../src/";
	    require("$classPath${class}.php");
	});

    $bd = SingleConexion::getInstance()->conexion();
    $foro = new Foro($bd);
    $bd->exec("set character set utf8");
 ?>
