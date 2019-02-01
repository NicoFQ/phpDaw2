<?php
require_once 'Conexion.php';
session_start();
class Login
{
    
    private static $instancia;
    private $pdo;
    private const TIEMPO_RECUERDAME = 180;
 
    private function __construct(){
        $this->pdo = Conexion::singleton_conexion();
    }
 
    public static function getInstance(){
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }
 
    public function login_usuarios(string $usuario, string $contrasena, bool $recuerdame = false) {

    try {
        $sql = "select * from usuario where email = ? and contrasena = ?";
        $sentencia = $this->pdo->prepare($sql);
        $sentencia->execute(array($usuario, $contrasena));
        print_r($sentencia->errorInfo());
         //si existe el usuario
         if($sentencia->rowCount() == 1){
            //session_start();
            $fila  = $sentencia->fetch();
            $_SESSION['nombre'] = $fila['nombre']; 
            if ($recuerdame) {
                $this->recuerdame($fila['id']);
            }
            return true;
         }
         
         $this->pdo = null;
     }catch(PDOException $e){
     
        print "Error!: " . $e->getMessage();
     
     } 

    }
    private function recuerdame($id){
        $tokenDeRecuerdo = generateToken();
        $sql = "insert into token (id_usuario, token) values (?,?);";
        $sentencia = $this->pdo->prepare($sql);
        //$sentencia->bindParam(':id', $id, PDO::PARAM_INT);
        //$sentencia->bindParam(':token', $token, PDO::PARAM_INT);
        $sentencia->execute(array($id, $tokenDeRecuerdo));
        //print_r($sentencia->errorInfo());
        setcookie("recuerdo_id", $id, time() + self::TIEMPO_RECUERDAME ,"/");
        setcookie("recuerdo_ik", $tokenDeRecuerdo, time() + self::TIEMPO_RECUERDAME,"/");
    }

    public function meRecuerdas($id, $ik){
        $teRecuerdo = false;
        $sql = 'select * from usuario u, token t where u.id = ? and t.token = ?;';
        $sentencia = $this->pdo->prepare($sql);
        $sentencia->execute(array($id, $ik));
        if ($sentencia->rowCount() === 1) {
            $teRecuerdo =  $sentencia->fetch()['nombre'];
        }
        return $teRecuerdo;
    }
 
}