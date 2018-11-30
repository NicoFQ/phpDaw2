<?php

class Liga
{
    private $equiposParticipantes;
    private $partidosAleatorios;
    public function __construct($equiposParticipantes,$partidosAleatorios){
        $this->equiposParticipantes = $equiposParticipantes;
        $this->partidosAleatorios = $partidosAleatorios;
    }
    
    function addEquipo(Equipo $param) {
        array_push($this->equiposParticipantes, $param);
    }    
}

