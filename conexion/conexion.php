<?php
// $servidor_bd="localhost";
// $usuario_bd="lzazxosj";
// $clave_bd="C8*syHRh-jV694";
// $datos_bd="lzazxosj_proyecto";
// $link = mysqli_connect($servidor_bd,$usuario_bd,$clave_bd,$datos_bd);
// $link->set_charset("utf8");
// if (!$link) {
//     die('No conectado : ' . mysql_error());
// };
//
// $db_selected = mysqli_select_db($link,$datos_bd);
// if (!$db_selected) {
//     die ('No se puede usar : ' . mysql_error());
// }

?>
<?php
$servidor_bd="localhost";
$usuario_bd="root";
$clave_bd="";
$datos_bd="proyecto";
$link = mysqli_connect($servidor_bd,$usuario_bd,$clave_bd,$datos_bd);
$link->set_charset("utf8");
if (!$link) {
    die('No conectado : ' . mysql_error());
};

$db_selected = mysqli_select_db($link,$datos_bd);
if (!$db_selected) {
    die ('No se puede usar : ' . mysql_error());
}

?>
