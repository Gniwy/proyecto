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
$sql_crear_empresa = "INSERT INTO `empresa`(`nombre`, `calle`, `cp`, `id_categoria`, `activo`, `lat`, `lng`) VALUES ('$nombre', '$zona', $cp, $tipo, 1, $lat, $lng)";
mysqli_query($link, $sql_crear_empresa);



 ?>
