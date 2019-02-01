<?php


$token_value = $_POST['login'].":".$_POST['token'];
setcookie('token', $token_value, time()+3600);

header('Location: control_acceso.php');
die();

?>
