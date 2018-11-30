<?php

interface IUnidadArmada
{
    public function ataqueEfectivo():bool;
    public function ataca(IUnidadArmada $unidad);
    public function dibuja();
    public function estaViva():bool;
}

?>
