<?php

require_once "conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_comentarios="SELECT * FROM comentario WHERE id_empresa='$id_empresa'";
$aux_comentarios=mysqli_query($link, $sql_comentarios);

$cont_comentarios=0;

  while($ex_comentarios=mysqli_fetch_assoc($aux_comentarios)){

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

        <div id="comentario_<?php echo $ex_comentarios['id'];?>" class="col-md-5 comentario" style="word-break: break-all;">

          <!-- Añadirle if por si elige anonimo -->
          <h5><?php echo $ex_cliente['nick'];?></h5>

          <?php

          echo $texto.$leer_mas;

          if($leer_mas!=""){?>
            <br>
            <a href="#">Leer mas</a>

          <?php } ?>

        </div>

    <?php $cont_comentarios++; } ?>

  </div>
</div>


<script type="text/javascript" src="modulos/comentarios/js/comentarios.js"></script>
