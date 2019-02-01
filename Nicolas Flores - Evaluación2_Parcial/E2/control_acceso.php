<?php

$usuarios = [];
// hash para 1234
$usuarios['usuario1']='$2y$10$PLpLxaooGZg2WgTyNGhvYeYfVys6mJAf9FdMpr6WLMT/9HQfIyba.';
// hash para 4321
$usuarios['usuario2']='$2y$10$6S36nLf75aabqW0zK6odQuytHNhE5WZHoOuFgEz2pPK39AjTEtRLO';


$tokens = [];
$tokens['usuario1']='ab16f363835143b6a0705b9eca22c27a85bab33f7a801bdcf8f2b06b44bf';
$tokens['usuario2']='612b3675bcdb08d67bb02a5eebf095a88a82764316dde093d53786fee0a6';

/*
Tu código...
*/



/*
Si no hay redirección positiva por defecto ir a login

OJO! Después de cada redirección debes hacer un die() para que termine la
 ejecución  del script.
*/
header('Location: /');
die;
?>
