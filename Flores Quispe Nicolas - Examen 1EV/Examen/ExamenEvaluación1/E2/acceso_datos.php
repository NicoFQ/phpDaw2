<?php


/*
EJEMPLO DE PROCESADO DE INFORMACIÓN

foreach ($resultado as $fila){
  foreach ($fila as $clave => $valor){
    echo $clave . " " . $valor . "<br/>";
  }
  echo "--------------<br/>";
}
*/

function obtenArrayAsociativoConBebidasAlcoholicas(){
    $ids = [];
    $nombres = [];
    $datosAsociativos;
    $datos = procesaSQL("select * from bebidas where alcohol like 'S'");

  
    
    while ($aux = $datos->fetch(PDO::FETCH_ASSOC)) {
      $ids[] = $aux["id"];
      $nombres[] = $aux["nombre"];

    }
    $datosAsociativos = array_combine($ids, $nombres);

    return $datosAsociativos;
}
print_r(obtenArrayAsociativoConBebidasAlcoholicas());

function obtenArrayAsociativoConBebidasNOAlcoholicas(){

     $ids = [];
    $nombres = [];
    $datosAsociativos;
    $datos = procesaSQL("select * from bebidas where alcohol like 'N'");

  
    
    while ($aux = $datos->fetch(PDO::FETCH_ASSOC)) {
      $ids[] = $aux["id"];
      $nombres[] = $aux["nombre"];

    }
    $datosAsociativos = array_combine($ids, $nombres);

    return $datosAsociativos;


}
print_r(obtenArrayAsociativoConBebidasNoAlcoholicas());

function obtenFilasDeCombinados(){

    $ids = [];
    $nombres = [];
    $bebidas_alcoholicas = [];
    $bebidas_no_alcoholicas = [];
    $datosAsociativos;
    $datos = procesaSQL("select * from combinados");

  
    
    while ($aux = $datos->fetch(PDO::FETCH_ASSOC)) {
      $datosAsociativos[] = $aux;

    }
  

    return $datosAsociativos;
}
print_r(obtenFilasDeCombinados());

function procesaSQL($sql)
{
  try {
      $mbd = new PDO('mysql:host=localhost;dbname=proyecto_foro', "admin_foro", "1234");
      $mbd -> exec("SET CHARACTER SET utf8");

      // Utilizar la conexión aquí
      $resultado = $mbd->query($sql);

      $sth = null;
      $mbd = null;


      return $resultado;


  } catch (PDOException $e) {
      print "¡Error!: " . $e->getMessage() . "<br/>";
      die();
  }
}

function procesaInsertSQL($sql="", $nombre, $tipo, $bebidas_alcoholicas, $bebidas_no_alcoholicas)
{
  try {
      $mbd = new PDO('mysql:host=localhost;dbname=proyecto_foro', "admin_foro", "1234");
      $mbd -> exec("SET CHARACTER SET utf8");
      $consulta = $mbd->prepare("insert into combinados (nombre, bebidas_alcoholicas,bebidas_no_alcoholicas, tipo) 
        values (?,?,?,?)");
      if (is_array($bebidas_alcoholicas)) {
      $conalcohol = serialize($bebidas_alcoholicas);
        
      }else{
        $conalcohol = $bebidas_alcoholicas;
      }
      if (is_array($bebidas_no_alcoholicas)) {
              
      $sinalcohol = serialize($bebidas_no_alcoholicas);

      }else{
        $sinalcohol = $bebidas_no_alcoholicas;
      }
      $consulta->execute(array($nombre, $conalcohol, $sinalcohol,$tipo));
      print_r($consulta->errorInfo());



      //$sql = "";
      //$data = [
      //    "PARAM" => "VALOR",
      //];

      // Utilizar la conexión aquí
      // $consulta = $mbd->prepare($sql);
      // $consulta->execute($data);
      // return $consulta;


  } catch (PDOException $e) {
      print "¡Error!: " . $e->getMessage() . "<br/>";
      die();
  }
}
procesaInsertSQL("", "nombrealgo", "tipoAlgo", "bebidas_alcoholicasSERIALIZADO", "bebidas_no_alcoholicasSERIALIZADO");
?>
