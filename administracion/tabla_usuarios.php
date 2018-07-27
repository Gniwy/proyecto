<?php

session_start();

require_once "../conexion/conexion.php";

// texto del buscador (lo inicializamos a valor vacio)
$texto="";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

//consulta para mostar los usuarios en la tabla
$sql_usuarios="SELECT * FROM usuario WHERE tipo_usuario='1' ";

//si el texto contiene algo, se añaden a la consulta
if($texto!=null){

  //si insertan un nick lo buscara en la tabla de clientes
  $sql_cliente="SELECT * FROM cliente WHERE nick LIKE '%$texto%' ";
  $aux_cliente=mysqli_query($link,$sql_cliente);

  //id_clientes contendra todos los id de los clientes que coinciden con la busqueda "nick"
  $id_clientes="0";

  while($ex_cliente=mysqli_fetch_assoc($aux_cliente)){
    $id_clientes.=",".$ex_cliente['id'];
  }

  // se completa el sql para buscar los usuarios para mostrarlos
  $sql_usuarios.=" AND (email LIKE '%$texto%' OR id_cliente IN ($id_clientes)) ";

}


$aux_usuarios=mysqli_query($link,$sql_usuarios);

?>

<link rel="stylesheet" href="css/tablas.css">

<br>*Falta: bloquear y eliminar
<table class="table-striped" style="width:100%;">

  <tr>
    <th style='width:20%;'>Nick</th>
    <th style='width:30%;'>Email</th>
    <th style='width:10%;'>Tipo usuario</th>
    <th style='width:5%;'></th>
    <th style='width:5%;'></th>
    <th style='width:5%;'></th>
  </tr>

  <?php while($ex_usuarios=mysqli_fetch_assoc($aux_usuarios)){

      //sacamos el id del usuario para mostrar la tabla de dicho usuario
      $id_usuario=$ex_usuarios['id_cliente'];

      $sql_cliente="SELECT * FROM cliente WHERE id='$id_usuario'";
      $aux_cliente=mysqli_query($link,$sql_cliente);
      $ex_cliente=mysqli_fetch_assoc($aux_cliente);

      //sacamos el nick y su tipo de usuario
      $nick=$ex_cliente['nick'];
      $id_tipo_usuario=$ex_usuarios['tipo_usuario'];

      $sql_tipo_usuario="SELECT * FROM tipo_usuario WHERE id='$id_tipo_usuario'";
      $aux_tipo_usuario=mysqli_query($link,$sql_tipo_usuario);
      $ex_tipo_usuario=mysqli_fetch_assoc($aux_tipo_usuario);

      $tipo_usuario=$ex_tipo_usuario['tipo'];


    ?>

    <tr id="usuario_<?php echo $id_usuario;?>" class="fila_usuario">
      <td id="nick_<?php echo $id_usuario;?>"><?php echo $nick;?></td>
      <td id="email_<?php echo $id_usuario;?>"><?php echo $ex_usuarios['email'];?></td>
      <td><?php echo $tipo_usuario;?></td>
      <td>
        <button id="editar_usuario_<?php echo $id_usuario;?>" class="fas fa-user-edit button_icons editar_usuario" style="cursor:pointer;" title="Editar usuario"></button>
        <button id="confirmar_edicion_<?php echo $id_usuario;?>" class="fas fa-check button_icons confirmar_edicion" style="cursor:pointer; color:green;" title="Confirmar"></button>
        <button id="cancelar_edicion_<?php echo $id_usuario;?>" class="fas fa-times button_icons cancelar_edicion" style="cursor:pointer; color:red;" title="Cancelar"></button>
      </td>
      <td> <button id="bloquear_usuario_<?php echo $id_usuario;?>" class="fas fa-ban button_icons bloquear_usuario" style="cursor:pointer; color:#f96800;" title="Bloquear usuario"></button></td>
      <td> <button id="borrar_usuario_<?php echo $id_usuario;?>" class="fas fa-trash-alt button_icons borrar_usuario" style="cursor:pointer; color:red;" title="Eliminar usuario"></button> </td>
    </tr>

  <?php } ?>

</table>


<script type="text/javascript" src="js/tabla_usuarios.js"></script>
