<?php

class ZonaDeMadrid implements IDatosFormulario
{
    private $id;
    private $method;
    private $zonaSeleccionada;
    private $errores;

    private static $zonas = [
        -1 => "",
        1 => "Centro",
        2 => "Norte",
        3 => "Este",
        4 => "Sur",
        5 => "Oeste",
    ];

    public function __construct($id='zona-de-madrid',  $method='post')
    {
        $this->id = $id;
        $this->method = $method;
        $this->zonaSeleccionada = -1;
        $this->errores = [];
    }

    public function obtenerDatosFormulario(array $data)
    {
        if(isset($data['zona']) && $data['zona'] != -1) { // Zona está entre 1 y 5
            $this->zonaSeleccionada = $data['zona'];
        } else {
            $this->errores [] = "Error en datos. Falta zona";
        }
    }

    public function generarFormulario()
    {
        ?>
        <form method="<?=$this->method?>">
          <select name="zona">
            <?php foreach (ZonaDeMadrid::$zonas as $clave => $valor) {?>
                <option
                  value="<?= $clave ?>"
                  <?php if($clave == $this->zonaSeleccionada) echo "selected" ?>
                  >
                  <?= $valor ?>
                </option>
            <?php } ?>
          </select>
          <input type="submit" name="submit" value="Enviar">
          <?php if(count($this->errores)>0) { ?>
            <div><?=$this->errores[0]?></div>
          <?php } ?>
        </form>
        <?php
    }

    public function contieneErrores(): bool
    {
        return count($this->errores) > 0;
    }

    public function __toString()
    {
        return ZonaDeMadrid::$zonas[$this->zonaSeleccionada];
    }
}

 ?>
