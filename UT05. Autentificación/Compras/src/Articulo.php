<?php
require_once 'Conexion.php';
class Articulo
{
    
    private static $instancia;
    private $pdo;
    private $sentencia;
    private $articulosCarrito = [];
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
 
    public function obtenerArticulos(){
        $sql = "select * from articulo;";
        $this->sentencia = $this->pdo->prepare($sql);
        $this->sentencia->execute();
        $this->pintarArticulos();

    }

    private function pintarArticulos(){ ?>
        <table>
            <tr>
                <th>Articulos</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>---------</th>
            </tr>

            <?php while ($datos = $this->sentencia->fetch(PDO::FETCH_ASSOC)) {
                $this->generaArticulo($datos); 
             } ?>
        </table>

    <?php  }

    private function generaArticulo($datos){?>
        <tr>
            <form action="compras.php" method="post">
                <input type="hidden" name="id_articulo" value="<?=$datos['id']?>">
                <td><?=$datos['nombre'] ?></td>
                <td><input type="number" name="cantidad" min="1" max="5"></td>
                <td><?=$datos['precio'] ?></td>
                <td>
                <input type="submit" name="anadir" value="anadir">
                </td>
            </form>

        </tr>

    <?php }
 

    public function addArticulos($id, $cantidad, $cookie){
        $sql = "select * from articulo where id = ?;";
        $this->sentencia = $this->pdo->prepare($sql);
        $this->sentencia->execute(array($id));
        if (count($this->sentencia->errorInfo())) {
            $articulo = $this->sentencia->fetch(PDO::FETCH_ASSOC);
            $precioTotal =  doubleval($articulo['precio']) * $cantidad;
            //array_push($this->articulosCarrito, $articulo['id']);
            $this->articulosCarrito[$articulo['id']] = array('precio'=>$articulo['id'],
                                                            'cantidad'=>$cantidad,
                                                        'total'=>$precioTotal);
            //print_r($this->articulosCarrito);
        }

        if (isset($cookie['ART'])) {
            echo "<br>";
            echo "<br>";
            echo "cookie";
            echo $cookie['ART'];
            echo "<br>";
            $desCookie = unserialize($cookie['ART']);
            //print_r($desCookie);
            $desCookie[$articulo['id']] = $this->articulosCarrito[$articulo['id']];
            $desCookie = serialize($desCookie);
            setcookie("ART", $desCookie, time()+99999);
            header("Location: ./../public/compras.php");
        }else{
            $articulosCookie = serialize($this->articulosCarrito);
            //echo $articulosCookie;
            setcookie("ART", $articulosCookie, time()+99999);
            header("Location: ./../public/compras.php");
        }
        //print_r($this->articulosCarrito);
        
    }
}
?>