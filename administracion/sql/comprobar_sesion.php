<?php

session_start();

require_once "../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}


//sql saber cual es el tipo usuario admin en la base de datos
$sql_comprobar_tipo_admin="SELECT * FROM tipo_usuario WHERE tipo='administrador'";
$aux_comprobar_tipo_admin=mysqli_query($link,$sql_comprobar_tipo_admin);
$ex_comprobar_tipo_admin=mysqli_fetch_assoc($aux_comprobar_tipo_admin);

$id_tipo_admin=$ex_comprobar_tipo_admin['id'];


$sql_comprobar_login="SELECT * FROM cliente WHERE nick='$nick'";
$aux_comprobar_login=mysqli_query($link,$sql_comprobar_login);
$ex_comprobar_login=mysqli_fetch_assoc($aux_comprobar_login);

$id_cliente=$ex_comprobar_login['id'];


$sql_comprobar_login_3="SELECT * FROM usuario WHERE id_cliente='$id_cliente' AND password='".md5($password)."' AND tipo_usuario='$id_tipo_admin'";
$aux_comprobar_login_3=mysqli_query($link,$sql_comprobar_login_3);
$ex_comprobar_login_3=mysqli_fetch_assoc($aux_comprobar_login_3);

$nick_usuario=$nick;

if($ex_comprobar_login_3['id_cliente']!=null){
  $correcto="si";
  echo "correcto";
}else{
  $correcto="no";
  echo "incorrecto";
}



if($correcto=='si'){
  $_SESSION['id_usuario']=$id_cliente;
  $_SESSION['nick_usuario']=$nick_usuario;
}



?>
