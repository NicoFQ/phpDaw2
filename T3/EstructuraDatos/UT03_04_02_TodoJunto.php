<?php
interface ICosa
{
    public function uno();
    public function dos();
}

abstract class Cosilla implements ICosa
{
    public function uno()
    {
        echo "Uno!<br/>";
    }

    abstract public function dos();
}

trait ImprimeNumeroMetodos
{
    function imprimeNumeroMetodos()
    {
        echo count(get_class_methods($this)) . "<br/>";
    }
}

class Cosaza extends Cosilla
{
    use ImprimeNumeroMetodos;
    public function dos()
    {
        echo "Dos!<br/>";
    }
}

class Cosota extends Cosaza
{
    public function medjaronUnTraitDeHerencia()
    {
        $this->imprimeNumeroMetodos();
    }
}

$o = new Cosaza();
$o->uno();
$o->dos();
$o->imprimeNumeroMetodos();

$on = new Cosota();
$on->medjaronUnTraitDeHerencia();
?>