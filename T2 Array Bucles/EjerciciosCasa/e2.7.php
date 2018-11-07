<?php
// Lista de asignaturas.
$asignatura1 = "Despliegue de aplicaciones web";
$asignatura2 = "Desarrollo web en entorno Servidor";
$asignatura3 = "Diseño de interfaces web";
$asignatura4 = "Desarrollo web en entorno Cliente";
$asignatura5 = "Inglés";
$asignatura6 = "Empresa e iniciativa emprendedora";


/*
    Array que asocia un identificador a 
    cada asignatura, se usará en el css.
*/
$colorAsignatura = [
    $asignatura1 => "asi1",
    $asignatura2 => "asi2",
    $asignatura3 => "asi3",
    $asignatura4 => "asi4",
    $asignatura5 => "asi5",
    $asignatura6 => "asi6",
];

$lunes = [
    1 => $asignatura3,
    2 => $asignatura3,
    3 => $asignatura6,
    //recreo
    4 => $asignatura2,
    5 => $asignatura2,
    6 => $asignatura2,
];


$martes = [
    1 => $asignatura2,
    2 => $asignatura2,
    3 => $asignatura2,
    //recreo
    4 => $asignatura4,
    5 => $asignatura4,
    6 => $asignatura4,
];


$miercoles = [
    1 => $asignatura4,
    2 => $asignatura4,
    3 => $asignatura4,
    //recreo
    4 => $asignatura3,
    5 => $asignatura3,
    6 => $asignatura6,
];


$jueves = [
    1 => $asignatura5,
    2 => $asignatura6,
    3 => $asignatura1,
    //recreo
    4 => $asignatura1,
    5 => $asignatura3,
    6 => $asignatura3,
];


$viernes = [
    1 => $asignatura2,
    2 => $asignatura2,
    3 => $asignatura2,
    //recreo
    4 => $asignatura5,
    5 => $asignatura1,
    6 => $asignatura1,
];

$dias = [
    1 => $lunes,
    2 => $martes,
    3 => $miercoles,
    4 => $jueves,
    5 => $viernes,
];
?>
<html>
    <head>
        <title>
          Ejercicio 2.6
      </title>
      <link rel="stylesheet" href="css/e2.7.css">
    </head>       
    <body>
      
      <div id="contenedorPrincipal">
            <?php 
                for ($i=1; $i <= sizeof($dias); $i++) { 

                    $contadorAsignaturaRepetida = 1;  // Reseta el contador de cada asignatura por cada dia nuevo.    
                    $asignatura = ""; // Resetea la asignatura por cada dia nuevo.

                    echo "<div class='dia'>"; // Abre un contenedor nuevo por cada dia.

                    for ($x=1; $x <= sizeof($dias[$i]); $x++) { 
                        
                        /* 
                            Suma el contador de asignaturas repetidas cada vez que se cumpla la condicion.
                        */
                        if ($asignatura == $dias[$i][$x] && $x != 4){ 
                            $contadorAsignaturaRepetida++;

                        }else{ // Cada vez que la asignatura sea distinta se recupera el contador y se crea un nuevo contenedor. 
                            
                            /*
                                Controla que no se la primera iteracion del bucle
                                ya que la primera siempre va ha ser false.
                            */
                            if($x > 1){
                                echo "<div id='$colorAsignatura[$asignatura]' class='asignaturax$contadorAsignaturaRepetida'>";
                                echo $asignatura;   
                                echo "</div>";            
                            }

                            $contadorAsignaturaRepetida = 1; // Si la asignatura deja de ser igual se restablece el contador.

                        }
                      
                        if($x == 6){ // Muestra la ultima iteraciion del bucle para no perder el ultimo contador de asignaturas.

                            $asig = $dias[$i][$x]; // Se recupera la asignatura debido a un error de arrays. [PREGUNTAR A JORGE!!]
                            echo "<div id='$colorAsignatura[$asig]' class='asignaturax$contadorAsignaturaRepetida'>";
                            echo $dias[$i][$x];                        
                            echo "</div>"; 
                        }

                        if($x == 4){ // Control de recreo.

                            echo "<div id='recreo'>";
                            echo "Recreo";      
                            echo "</div>"; 
                        }

                        $asignatura = $dias[$i][$x]; // Asignamos una nueva asignatura por cada iteracion.
                        
                    }
                    echo "</div>";
                    echo "<br>";
                }
             ?>
        </div>
    </body>
</html>