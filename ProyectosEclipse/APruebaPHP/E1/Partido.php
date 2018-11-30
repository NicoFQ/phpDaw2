<?php

class Partido
{
    private $local;
    private $visitante;
    
    public function __construct(Partido $local, Partido $visitante)
    {
        $this->local = $local;
        $this->visitante = $visitante;
    }
    
    function mismoPartido(Partido $partido) {
        
        $nombreLocal = $this->local->getNombre();
        $nombreVisitante = $this->visitante->getNombre();
        
        $nombreLocal2 = $partido->getLocal()->getNombre();
        $nombreVisitante2 = $this->getVisitante()->getNombre();
        
        if($nombreLocal == $nombreVisitante ||
            $nombreLocal2 == $nombreVisitante2){
            return true;
        }
        return false;
    }
    /**
     * @return Partido
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * @return Partido
     */
    public function getVisitante()
    {
        return $this->visitante;
    }

    /**
     * @param Partido $local
     */
    public function setLocal($local)
    {
        $this->local = $local;
    }

    /**
     * @param Partido $visitante
     */
    public function setVisitante($visitante)
    {
        $this->visitante = $visitante;
    }

}
?>
