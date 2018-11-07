<?php
header('X-XSS-Protection:0');

function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$login = "";
$loginError = false;

if(isset($_POST["submit"])) {
    if(isset($_POST["login"])){
        $login = clean_input($_POST["login"]);
    }
    if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
        $loginError = true;
        //http://php.net/manual/es/filter.filters.php
    }
}

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<form action="login003.php" method="post" class="login">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="login" id="login" value="<?=$login?>">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">
    </p>

    <?php if ($loginError) { ?>
    <p>
      <div class="error">Usuario inválido</div>
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
