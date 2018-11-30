<?php

class Ejercito 
{
    private $nombre;
    private $unidades;

    public function __construct($nombre, $numero=10)
    {
        $this->nombre = $nombre;
        
        for ($i = 0; $i < $numero; $i++) {
            $this->unidades[] = UnidadArmada::generaUnidad();
        }
    }

    public function formacion()
    {
        shuffle($this->unidades);
    }

    public function ataca(Ejercito $otro)
    {
        
    }

    public function retiraTropas()
    {
        //TODO: Rellena
    }

    public function puedeLuchar():bool
    {
        //TODO: Rellena
    }

    public function __toString()
    {
        //TODO: Rellena
    }
}
