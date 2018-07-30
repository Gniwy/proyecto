<?php

session_start();

require_once "../conexion/conexion.php";

// texto del buscador (lo inicializamos a valor vacio)
$texto="";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}
//consulta para mostar las empresas en la tabla
$sql_empresas="SELECT * FROM empresa WHERE activo= 1 ";

//si el texto contiene algo, se añaden a la consulta
if($texto!=null){
  //si insertan un nombre lo buscara en la tabla de empresas
  $sql_empresas="SELECT * FROM empresa WHERE nombre LIKE '%$texto%' ";
  $aux_empresas=mysqli_query($link,$sql_empresas);

  //id_empresas contendra todos los id de las empresas que coinciden con la busqueda "nombre"
  $id_empresas="0";

  while($ex_empresas=mysqli_fetch_assoc($aux_empresas)){
    $id_empresas.=",".$ex_empresas['id'];
  }

}


$aux_empresas=mysqli_query($link,$sql_empresas);

?>

<link rel="stylesheet" href="css/tablas.css">

<br>*Falta: bloquear y eliminar
<table class="table-striped" style="width:100%;">

  <tr>
    <th style='width:20%;'>Nombre</th>
    <th style='width:30%;'>Calle</th>
    <th style='width:10%;'>CP</th>
    <th style='width:5%;'></th>
    <th style='width:5%;'></th>
    <th style='width:5%;'></th>
  </tr>

<!-- bucle de listado de las empresas -->
  <?php while($ex_empresas=mysqli_fetch_assoc($aux_empresas)){

      //sacamos el id de las empresas para mostrar la tabla de dichas empresas
      $id_empresas=$ex_empresas['id'];

      $sql_empresas="SELECT * FROM empresa WHERE id='$id_empresas'";
      $aux_empresas=mysqli_query($link,$sql_empresas);
      $ex_empresas=mysqli_fetch_assoc($aux_empresas);

      //sacamos el nombre, su calle y su cp
      $nombre=$ex_empresas['nombre'];
      $calle=$ex_empresas['calle'];
      $cp = $ex_empresas['cp'];

      $bloqueado=$ex_empresas['activo'];
    ?>

    <tr id="empresas_<?php echo $id_empresas;?>" class="fila_empresas">
      <td id="nombre_<?php echo $id_empresas;?>"><?php echo $nombre;?></td>
      <td id="calle_<?php echo $id_empresas;?>"><?php echo $calle;?></td>
      <td id="cp_<?php echo $id_empresas;?>"><?php echo $cp;?></td>
      <td>
        <button id="editar_empresas_<?php echo $id_empresas;?>" class="fas fa-user-edit button_icons editar_empresas" style="cursor:pointer;" title="Editar empresas"></button>
        <button id="confirmar_edicion_<?php echo $id_empresas;?>" class="fas fa-check button_icons confirmar_edicion" style="cursor:pointer; color:green;" title="Confirmar"></button>
        <button id="cancelar_edicion_<?php echo $id_empresas;?>" class="fas fa-times button_icons cancelar_edicion" style="cursor:pointer; color:red;" title="Cancelar"></button>
      </td>
      <?php if($bloqueado==0){?>
        <td> <button id="bloquear_empresas_<?php echo $id_empresas;?>" class="fas fa-unlock button_icons bloquear_empresas" style="cursor:pointer; color:#109100;" title="Desbloqueado"></button></td>
      <?php }else{?>
        <td> <button id="desbloquear_empresas_<?php echo $id_empresas;?>" class="fas fa-lock button_icons desbloquear_empresas" style="cursor:pointer; color:#f96800;" title="Bloqueado"></button></td>
      <?php }?>

      <td> <button id="borrar_empresas_<?php echo $id_empresas;?>" class="fas fa-trash-alt button_icons borrar_empresas" style="cursor:pointer; color:red;" title="Eliminar empresas"></button> </td>
    </tr>

  <?php } ?>

</table>


<script type="text/javascript" src="js/tabla_empresas.js"></script>
