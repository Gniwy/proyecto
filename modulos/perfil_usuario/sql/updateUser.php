<?php

require_once "../../../conexion/conexion.php";

foreach ($_POST as $variable => $valor) {
  $$variable = $valor;
}

// id_user
// nick
// password
// direccion
// ciudad
// sexo
// cp
  $sql_update_cliente = "UPDATE `cliente` SET `nick`='$nick',`direccion`='$direccion',`ciudad`='$ciudad',`sexo`='$sexo',`cp`='$cp' WHERE id = $id_user";
  mysqli_query($link, $sql_update_cliente);



  /* password encriptada*/
  $password_encriptada=password_hash($password, PASSWORD_BCRYPT);


  $sql_update_user = "UPDATE `usuario` SET `password`='$password_encriptada' WHERE id_cliente = $id_user";
  mysqli_query($link, $sql_update_user);

 ?>
