<?php

session_start();

require_once "../../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}



$sql_comprobar_login="SELECT * FROM cliente WHERE nick='$nick' AND bloqueado=0";
$aux_comprobar_login=mysqli_query($link,$sql_comprobar_login);
$ex_comprobar_login=mysqli_fetch_assoc($aux_comprobar_login);

$id_cliente=$ex_comprobar_login['id'];


//si a insertado el nick, procedemos a comprobarlo con el correo
if($id_cliente==null){
  $sql_comprobar_login_2="SELECT * FROM usuario WHERE email='$nick'";
  $aux_comprobar_login_2=mysqli_query($link,$sql_comprobar_login_2);
  $ex_comprobar_login_2=mysqli_fetch_assoc($aux_comprobar_login_2);

  $id_cliente=$ex_comprobar_login_2['id_cliente'];
  $nick_usuario=$nick;

  $password_consulta=$ex_comprobar_login_2['password'];

  $sql_comprobar_bloqueado="SELECT * FROM cliente WHERE id=$id_cliente AND bloqueado=0";
  $aux_comprobar_bloqueado=mysqli_query($link,$sql_comprobar_bloqueado);
  $ex_comprobar_bloqueado=mysqli_fetch_assoc($aux_comprobar_bloqueado);

  if($ex_comprobar_bloqueado['id']!=null){

    if($ex_comprobar_login_2['id_cliente']!=null && password_verify($password, $password_consulta)){
      $correcto="si";
      echo "correcto";
    }else{
      $correcto="no";
      echo "incorrecto";
    }
  }else{
    $correcto="no";
    echo "bloqueado";
  }
}else{

  $sql_comprobar_login_3="SELECT * FROM usuario WHERE id_cliente='$id_cliente'";
  $aux_comprobar_login_3=mysqli_query($link,$sql_comprobar_login_3);
  $ex_comprobar_login_3=mysqli_fetch_assoc($aux_comprobar_login_3);

  $nick_usuario=$nick;
  $password_consulta=$ex_comprobar_login_3['password'];


  if($ex_comprobar_login_3['id_cliente']!=null && password_verify($password, $password_consulta)){
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
