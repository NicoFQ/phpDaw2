<?php


class Equipo
{
    
    private $nombre;
    private $ciudad;
    
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param mixed $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    public function __construct($nombre, $ciudad){
        $this->ciudad = $ciudad;
        $this->nombre = $nombre;
    }
}
?>
