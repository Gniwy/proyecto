<?php

@session_start();

require_once "../../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}



$sql_comprobar_login="SELECT * FROM cliente WHERE nick='$nick'";
$aux_comprobar_login=mysqli_query($link,$sql_comprobar_login);
$ex_comprobar_login=mysqli_fetch_assoc($aux_comprobar_login);

$id_cliente=$ex_comprobar_login['id'];



//si a insertado el nick, procedemos a comprobarlo con el correo
if($id_cliente==null){
  $sql_comprobar_login_2="SELECT * FROM usuario WHERE email='$nick' AND password='".md5($password)."'";
  $aux_comprobar_login_2=mysqli_query($link,$sql_comprobar_login_2);
  $ex_comprobar_login_2=mysqli_fetch_assoc($aux_comprobar_login_2);

  if($ex_comprobar_login_2['id_cliente']!=null){
    $correcto="si";
    echo "correcto";
  }else{
    $correcto="no";
    echo "incorrecto";
  }
}else{

  $sql_comprobar_login_3="SELECT * FROM usuario WHERE id_cliente='$id_cliente' AND password='".md5($password)."'";
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

}

if($correcto=='si'){
  $_SESSION['id_usuario']=$id_cliente;
  $_SESSION['nick_usuario']=$nick_usuario;
}


?>