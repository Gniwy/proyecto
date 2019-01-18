<?php

require_once "../../../conexion/conexion.php";

foreach ($_POST as $variable => $valor) {
  $$variable=$valor;
}

// nombre
// tipo
// zona
// cp
// lat
// lng
// comentario
$sql_crear_empresa = "INSERT INTO `empresa`(`nombre`, `calle`, `cp`, `id_categoria`, `lat`, `lng`) VALUES ('$nombre', '$zona', $cp, $tipo, $lat, $lng)";
mysqli_query($link, $sql_crear_empresa);


$sql_id_empresa = "SELECT * FROM `empresa` ORDER BY `empresa`.`id` DESC LIMIT 1";
$aux_id_empresa=mysqli_query($link,$sql_id_empresa);
$ex_id_empresa=mysqli_fetch_assoc($aux_id_empresa);

$id_empresa=$ex_id_empresa['id'];


$sql_primer_user = "INSERT INTO `comentario`(`id_cliente`, `texto`, `valoracion`, `id_empresa`) VALUES ($id_usuario, '$comentario', 5, $id_empresa)";
mysqli_query($link, $sql_primer_user);

 ?>
