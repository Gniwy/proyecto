<?php

include_once "../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_empresa="SELECT * FROM empresa WHERE id=".$id_empresa;
$aux_empresa=mysqli_query($link,$sql_empresa);
$ex_empresa=mysqli_fetch_assoc($aux_empresa);

$nombre_empresa=$ex_empresa['nombre'];
?>

<div id="modal_confirmar_eliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color:black;">¿Estas seguro de eliminar <b><?php echo $nombre_empresa;?></b>?</h4>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-danger borrar_empresa" name="button" id="borrar_empresas_<?php echo $id_empresa;?>">SI</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" name="button">NO</button>
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">

// elimina la empresa de la bbdd
$('.borrar_empresa').click(function(){

  // sacamos el id de la empresa
  var id_elemento = $(this).attr('id');

  // el tamano del nombre del id para solo sacar el id
  id_elemento = id_elemento.substring(16);

  $.ajax({
    type:"GET",
    url:"sql/eliminar_empresas.php",
    data:{
      id_empresas:id_elemento
    },success:function(data){

      $('#modal_confirmar_eliminar').modal('toggle');
      setTimeout(function(){
        // se vuelve a cargar la tabla de empresas
        $('#contenido').load('contenido_empresas.php');
      }, 300);
    }
  });
});

</script>
