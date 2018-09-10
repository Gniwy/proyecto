<?php

require_once "conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_comentarios="SELECT * FROM comentario WHERE id_empresa='$id_empresa'";
$aux_comentarios=mysqli_query($link, $sql_comentarios);

$cont_comentarios=0;

  while($ex_comentarios=mysqli_fetch_assoc($aux_comentarios)){

      $id_comentario=$ex_comentarios['id'];

      $texto=$ex_comentarios['texto'];
      $id_cliente=$ex_comentarios['id_cliente'];

      $sql_cliente="SELECT * FROM cliente WHERE id='$id_cliente'";
      $aux_cliente=mysqli_query($link, $sql_cliente);
      $ex_cliente=mysqli_fetch_assoc($aux_cliente);

      $leer_mas="";

      if(strlen($texto)>300){
        $leer_mas="...";
        $texto= substr($ex_comentarios['texto'], -300);
      }


      if($cont_comentarios%2==0 || $cont_comentarios==0){?>

        </div>


      <div class="row">

      <?php } ?>

        <div id="comentario_<?php echo $id_comentario;?>" class="col-md-5 comentario" style="word-break: break-all;">

          <!-- Añadirle if por si elige anonimo -->
          <h5><?php echo $ex_cliente['nick'];?></h5>

          <?php

          echo $texto.$leer_mas;

          if($leer_mas!=""){?>
            <br>
            <a href="#" class="leer_mas" id="leer_mas_<?php echo $id_comentario;?>">Leer mas</a>
            <div class="text-right">
              <i class="far fa-thumbs-up fa-2x pointer" style="color:green;"></i>
              0 votos
              &nbsp;
              <i class="far fa-thumbs-down fa-2x pointer" style="color:red;"></i>
              0 votos
            </div>
          <?php } ?>

        </div>

    <?php $cont_comentarios++; } ?>

  </div>
</div>

<div id="div_modal_leer_mas"></div>


<script type="text/javascript" src="modulos/comentarios/js/comentarios.js"></script>
