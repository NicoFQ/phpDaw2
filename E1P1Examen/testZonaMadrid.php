<?php

spl_autoload_register(function ($clase) {
    include ('./' . $clase . '.php');
});



$zona = new ZonaDeMadrid();

if(count($_POST)>0){
    $zona->obtenerDatosFormulario($_POST);
}

$zona->generarFormulario();

if(count($_POST)>0 && !$zona->contieneErrores()){
    echo "Información de zona correcta<br/>" . $zona;
}
?>
