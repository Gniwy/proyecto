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


// empresa
$sql_crear_empresa = "INSERT INTO `empresa`(`nombre`, `calle`, `cp`, `id_localidad`, `lat`, `lng`) VALUES ('$nombre', '$zona', $cp, $localidad, $lat, $lng)";
mysqli_query($link, $sql_crear_empresa);


$sql_id_empresa = "SELECT * FROM `empresa` ORDER BY `empresa`.`id` DESC LIMIT 1";
$aux_id_empresa=mysqli_query($link,$sql_id_empresa);
$ex_id_empresa=mysqli_fetch_assoc($aux_id_empresa);

$id_empresa=$ex_id_empresa['id'];

// datos comentarios
$sql_primer_user = "INSERT INTO `comentario`(`id_cliente`, `texto`, `valoracion`, `id_empresa`) VALUES ($id_usuario, '$comentario', $valoracion, $id_empresa)";
mysqli_query($link, $sql_primer_user);

// valoradion comentarios

$sql_id_comentario = "SELECT id FROM `comentario` ORDER BY id DESC LIMIT 1";
$aux_id_comentario = mysqli_query($link, $sql_id_comentario);
$ex_id_comentario = mysqli_fetch_assoc($aux_id_comentario);

$id_comentario = $ex_id_comentario['id'];

$sql_primera_valoracion = "INSERT INTO `comentarios_valoracion`(`id_comentario`, `id_cliente`, `valoracion`) VALUES ($id_comentario, $id_usuario, 1) ";
$aux_primera_valoracion = mysqli_query($link, $sql_primera_valoracion);


echo "--datosCrearEmpresa.php--";

 ?>
