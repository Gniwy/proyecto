<?php

require_once "../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_comentario="SELECT * FROM comentario WHERE id='$id_comentario'";
$aux_comentario=mysqli_query($link,$sql_comentario);
$ex_comentario=mysqli_fetch_assoc($aux_comentario);

$comentario=$ex_comentario['texto'];

?>

<div id="modal_leer_mas" class="modal fade" role="dialog" aria-labelledby="modal_login_label" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title col-md-9 text-left" id="modal_leer_mas_label">Comentario</h4>
        <div class="col-md-3 text-right"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
      </div>
      <div class="modal-body">
        <div class="" style="word-break: break-all;">
        <?php echo $comentario;?>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
