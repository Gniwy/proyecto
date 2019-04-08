<?php

require_once "../../../conexion/conexion.php";

foreach ($_POST as $variable => $valor) {
  $$variable=$valor;
}

// nombre
// zona
// cp
// lat
// lng
// comentario
// valoracion

$sql_crear_empresa = "INSERT INTO `empresa`(`nombre`, `calle`, `cp`, `lat`, `lng`) VALUES ('$nombre', '$zona', $cp, $lat, $lng)";
mysqli_query($link, $sql_crear_empresa);


$sql_id_empresa = "SELECT * FROM `empresa` ORDER BY `empresa`.`id` DESC LIMIT 1";
$aux_id_empresa=mysqli_query($link,$sql_id_empresa);
$ex_id_empresa=mysqli_fetch_assoc($aux_id_empresa);

$id_empresa=$ex_id_empresa['id'];


$sql_primer_user = "INSERT INTO `comentario`(`id_cliente`, `texto`, `valoracion`, `id_empresa`) VALUES ($id_usuario, '$comentario', $valoracion, $id_empresa)";
mysqli_query($link, $sql_primer_user);

 ?>
