<?php
header('X-XSS-Protection:0');

require_once("../src/AutentificacionConBaseDeDatos.php");


function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$login = "";
$pass = "";
$errorList = [];

if(isset($_POST["submit"])) {
    if(isset($_POST["login"])){
        $login = clean_input($_POST["login"]);
    }
    if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
        $errorList[] = "Usuario inválido";
        //http://php.net/manual/es/filter.filters.php
    }


    if(isset($_POST["password"])){
        $password = clean_input($_POST["password"]);
    }
    $auth = new AutentificacionConBaseDeDatos();
    if( $auth->existe($login, $password) ){
        header('Location: premio.php?redirigido=1');
        exit;
    }else{
        $errorList[] = "Clave errónea";
    }
}

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<form action="login004.php" method="post" class="login">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="login" id="login" value="<?=$login?>">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">
    </p>

    <?php if (count($errorList)>0) { ?>
    <p>
      <?php foreach($errorList as $error) { ?>
        <div class="error"><?= $error ?></div>
      <?php } ?>
    </p>
    <?php }?>

    <p class="login-submit">
      <label for="submit">&nbsp;</label>
      <button type="submit" name="submit" class="login-button">Login</button>
    </p>
</form>
</body>
</html>


<!---
<script>alert(document.cookie);</script>
"<script>alert(document.cookie);</script>
"><script>alert(document.cookie);</script>
--->
