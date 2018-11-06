<?php
interface IDatosFormulario
{
    public function __construct(string $id, string $method);
    public function obtenerDatosFormulario(array $data);
    public function generarFormulario();
    public function contieneErrores():bool;
}
?>
