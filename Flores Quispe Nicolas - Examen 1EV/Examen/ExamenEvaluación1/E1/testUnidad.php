<?php

spl_autoload_register(function ($class) {
    $classPath = "./src/";
    // en nuestros proyectos
    // ../src/
    // o la ruta a la raíz del proyecto
    require("$classPath${class}.php");
});

$ue1 = new UnidadElite();
$ue2 = new Batallon();
$ue3 = new Caballeria();
// echo "<br>";
// echo $ue1->getVida();
// echo $ue1->getDanio();
// echo "<br>";
// $ue1->dibuja();
$ue1->ataca($ue2);
$ue1->ataca($ue3);

$ue2->ataca($ue1);
$ue2->ataca($ue3);


$ue3->ataca($ue2);
$ue3->ataca($ue1);



//$ue1->ataca($ue2);
//$ue1->ataca($ue2);

?>
