<?php


class Batallon extends UnidadArmada
{
    public function getVida(){
        return $this->vida;
    }
    public function setVida($vida){
        $this->vida = $vida;
    }
    
    public function getDanio(){
        return $this->danio;
    }
    public function setDanio($danio){
        $this->vida = $danio;
    }
    
    public function __construct($vida=80, $danio=20)
    {
        
        $this->vida = $vida;
        $this->danio = $danio;
    }

    function __destruct()
    {}
    public function ataca(IUnidadArmada $unidad)
    {
        
        echo "Atacante: ".$this->dibuja();
        $atacando = $this->ataqueEfectivo();
        if ($atacando){
            //echo $unidad->getVida();
            $unidad->setVida($unidad->getVida() - $this->danio);
            echo "<br>ataque efectivo !!!!! <br>";
            
        }else{
            echo "ataque fallido xxxxx <br>";
        }
        echo "Recibe ataque: ". $unidad->dibuja();
        
        echo "<br>";
        
    }

    public function dibuja()
    {
        return "(".get_class($this). " v: " . $this->vida . ")"; //PENDIENTE 
    }

    public function ataqueEfectivo():bool
    {
        $num = mt_rand(1,100);
        $ataque = true;
        if ($num % 2 === 0) {
           $ataque = false;
        }
        return $ataque;
    }



    public function estaViva():bool
    {
        $vivo = true;
        if ($this->vida<=0) {
            $vivo = false;
        }
        return $vivo;
        
        
    }

}

