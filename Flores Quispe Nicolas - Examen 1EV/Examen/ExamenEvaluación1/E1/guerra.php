<?php
spl_autoload_register(function ($class) {
    $classPath = "./src/";
    // en nuestros proyectos
    // ../src/
    // o la ruta a la raíz del proyecto
    require("$classPath${class}.php");
});

$ejercito1 = new Ejercito("URSS", 10);
$ejercito2 = new Ejercito("EEUU", 10);

while($ejercito1->puedeLuchar() && $ejercito2->puedeLuchar()){

    echo "***********************************<br>";
    echo "***********************************<br>";

    $aleatorio = mt_rand(0,10)%2==0;

    if($aleatorio){
        $ejercitoQueAtaca = $ejercito1;
        $ejercitoAtacado = $ejercito2;
    } else {
        $ejercitoQueAtaca = $ejercito2;
        $ejercitoAtacado = $ejercito1;
    }

    echo "$ejercitoQueAtaca ataca a $ejercitoAtacado<br>";

    echo "Formación!!<br>";
    $ejercitoQueAtaca->formacion();
    $ejercitoAtacado->formacion();

    echo "Ataque!!!!<br>";
    $ejercitoQueAtaca->ataca($ejercitoAtacado);

    echo "Retirando muertos...<br>";
    $ejercitoQueAtaca->retiraTropas();
    $ejercitoAtacado->retiraTropas();

    echo "Resultado: $ejercitoQueAtaca $ejercitoAtacado<br>";
}

if($ejercito1->puedeLuchar()) {
    echo "Ganó " . $ejercito1;
}

if($ejercito2->puedeLuchar()) {
    echo "Ganó " . $ejercito2;
}

?>
