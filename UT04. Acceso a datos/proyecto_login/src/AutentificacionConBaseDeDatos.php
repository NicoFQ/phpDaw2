<?php

require_once('../config/bd_config.php');

class AutentificacionConBaseDeDatos
{
    private $dbPDO;

    public function __construct()
    {
        global $db_user;
        global $db_pass;
        global $db_name;

        try {

            $this->dbPDO = new PDO(
              "mysql:host=localhost;dbname=$db_name",
              $db_user,
              $db_pass
            );

        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function existe(string $user, string $pass): bool
    {
        try {

            $sentenciaSQL = $this->dbPDO->query("SELECT * FROM usuarios WHERE nombre = '$user' AND contrasena = '$pass'");
            $resultado = $sentenciaSQL->fetchAll();
            return (count($resultado) == 1);

        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            return false;
        }
    }

    public function __destruct()
    {
        $this->dbPDO = null;
    }
}

?>
