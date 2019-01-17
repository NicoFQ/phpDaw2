<h1>Principal</h1>

<?php

$id="RecogeHuevos";

$url="http://127.0.0.1:9000/authorize?client_id=$id&response_type=code&redirect_uri=http://127.0.0.1:9001/call_back.php&scope=eggs-count profile";


?>

<a href="<?=$url?>">Accede</a>
