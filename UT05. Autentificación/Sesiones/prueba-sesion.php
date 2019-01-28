<?php

/* Multiples sesiones */
session_name("ASD");
session_start();
if(!isset($_SESSION['valor'])) {
  $_SESSION['valor'] = 20;
}
$tmp1 = $_SESSION['valor'];

session_write_close();


session_name("DSA");

//Importante
session_id(session_create_id());

session_start();

if(!isset($_SESSION['valor'])) {
  $_SESSION['valor'] = 10;
}
$tmp2 = $_SESSION['valor'];

echo "Sesión ASD tiene valor $tmp1<br>";
echo "Sesión DSA tiene valor $tmp2<br>";
?>