<?php
$servidor_bd="localhost";
$usuario_bd="root";
$clave_bd="";
$datos_bd="proyecto";
$link = mysqli_connect($servidor_bd,$usuario_bd,$clave_bd,$datos_bd);
if (!$link) {
    die('No conectado : ' . mysql_error());
};

$db_selected = mysqli_select_db($link,$datos_bd);
if (!$db_selected) {
    die ('No se puede usar : ' . mysql_error());
}

?>
