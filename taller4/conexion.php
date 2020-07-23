<?php
define('host','localhost');
define('dbname','tstphp');
define('user','local');
define('pass','local');

$enlace = mysqli_connect(host,user , pass, dbname);

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else {
    // echo "La conección ah sido establecida.";
}

?>