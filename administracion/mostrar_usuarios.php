
<?php

session_start();

require_once "../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_usuarios="SELECT * FROM usuario WHERE tipo_usuario='1'";
$aux_usuarios=mysqli_query($link,$sql_usuarios);

?>

<table>

  <?php while($ex_usuarios=mysqli_fetch_assoc($aux_usuarios)){

      $id_usuario=$ex_usuarios['id_cliente'];

      $sql_cliente="SELECT * FROM cliente WHERE id='$id_usuario'";
      $aux_cliente=mysqli_query($link,$sql_cliente);
      $ex_cliente=mysqli_fetch_assoc($aux_cliente);

      $nick=$ex_cliente['nick'];
    ?>

    <tr>
      <td style="width:70%;"><?php echo $nick;?></td>
      <td> <i class="fas fa-user-edit"></i> </td>
      <td> <i class="fas fa-trash-alt"></i> </td>
    </tr>

  <?php } ?>

</table>
