<?php


abstract class UnidadArmada implements IUnidadArmada
{
    protected $vida;
    protected $danio;
    
    abstract public function ataca(IUnidadArmada $unidad);

    abstract public function dibuja();
    
    abstract public function ataqueEfectivo():bool;

    abstract public function estaViva():bool;
    
    public static function generaUnidad(){
        $unidad; 
        $num = mt_rand(1,33);
        
        if ($num>0 && $num<=11) {
            $unidad = new UnidadElite();
        }else if ($num>11 && $num<=22) {
            $unidad = new Batallon();
        } else if ($num>22 && $num<=33) {
            $unidad = new Caballeria();
        }
       
        return $unidad;
    }
    
}

