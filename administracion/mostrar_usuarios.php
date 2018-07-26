
<?php

session_start();

require_once "../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_usuarios="SELECT * FROM usuario WHERE tipo_usuario='1'";
$aux_usuarios=mysqli_query($link,$sql_usuarios);

?>
*Falta: <br> buscador <br> al editar un usuario desabilitar el resto <br> bloquear <br> eliminar
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

      $id_usuario=$ex_usuarios['id_cliente'];

      $sql_cliente="SELECT * FROM cliente WHERE id='$id_usuario'";
      $aux_cliente=mysqli_query($link,$sql_cliente);
      $ex_cliente=mysqli_fetch_assoc($aux_cliente);

      $nick=$ex_cliente['nick'];
      $id_tipo_usuario=$ex_usuarios['tipo_usuario'];

      $sql_tipo_usuario="SELECT * FROM tipo_usuario WHERE id='$id_tipo_usuario'";
      $aux_tipo_usuario=mysqli_query($link,$sql_tipo_usuario);
      $ex_tipo_usuario=mysqli_fetch_assoc($aux_tipo_usuario);

      $tipo_usuario=$ex_tipo_usuario['tipo'];


    ?>

    <tr id="usuario_<?php echo $id_usuario;?>">
      <td id="nick_<?php echo $id_usuario;?>"><?php echo $nick;?></td>
      <td id="email_<?php echo $id_usuario;?>"><?php echo $ex_usuarios['email'];?></td>
      <td><?php echo $tipo_usuario;?></td>
      <td>
        <i id="editar_usuario_<?php echo $id_usuario;?>" class="fas fa-user-edit editar_usuario" style="cursor:pointer;" title="Editar usuario"></i>
        <i id="confirmar_edicion_<?php echo $id_usuario;?>" class="fas fa-check confirmar_edicion" style="cursor:pointer; color:green;" title="Confirmar"></i>
        <i id="cancelar_edicion_<?php echo $id_usuario;?>" class="fas fa-times cancelar_edicion" style="cursor:pointer; color:red;" title="Cancelar"></i>
      </td>
      <td> <i id="bloquear_usuario_<?php echo $id_usuario;?>" class="fas fa-ban bloquear_usuario" style="cursor:pointer; color:#f96800;" title="Bloquear usuario"></i></td>
      <td> <i id="borrar_usuario_<?php echo $id_usuario;?>" class="fas fa-trash-alt borrar_usuario" style="cursor:pointer; color:red;" title="Eliminar usuario"></i> </td>
    </tr>

  <?php } ?>

</table>

<script type="text/javascript" src="js/usuarios.js"></script>
