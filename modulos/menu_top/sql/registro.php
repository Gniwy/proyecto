<?php

require_once "../../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

/* Comprobar nick no repetido*/
$sql_comprobar_nick="SELECT * FROM cliente WHERE nick='$nick'";
$aux_comprobar_nick=mysqli_query($link,$sql_comprobar_nick);
$ex_comprobar_nick=mysqli_fetch_assoc($aux_comprobar_nick);

if($ex_comprobar_nick['id']!=null){
  echo '<cliente>existe</cliente>';
}else{
  echo '<cliente>no_existe</cliente>';
}
/* Fin comprobar nick no repetido*/

/* Comprobar email repetido*/
$sql_comprobar_email="SELECT * FROM usuario WHERE email='$email'";
$aux_comprobar_email=mysqli_query($link,$sql_comprobar_email);
$ex_comprobar_email=mysqli_fetch_assoc($aux_comprobar_email);

if($ex_comprobar_email['email']!=null){
  echo '<email>existe</email>';
}else{
  echo '<email>no_existe</email>';
}
/* Fin comprobar email repetido*/

$sql_registro="INSERT INTO cliente(nick) VALUES('$nick')";
mysqli_query($link,$sql_registro);


$sql_id_usuario="SELECT * FROM cliente WHERE nick='$nick'";
$aux_id_usuario=mysqli_query($link,$sql_id_usuario);
$ex_id_usuario=mysqli_fetch_assoc($aux_id_usuario);


$id_usuario=$ex_id_usuario['id'];

/* password encriptada*/
$password_encriptada=md5($password);

$sql_usuario="INSERT INTO usuario(id_cliente,email,password) VALUES ($id_usuario,'$email','$password_encriptada')";
mysqli_query($link,$sql_usuario);


?>
