
<link rel="stylesheet" href="modulos/comentarios/css/comentarios.css">
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

      /*Saber los votos que tiene actualmente*/
      $sql_votos="SELECT * FROM comentarios_valoracion WHERE id_comentario=".$id_comentario;
      $aux_votos=mysqli_query($link, $sql_votos);
      $votos_positivos=0;
      $votos_negativos=0;

      while($ex_votos=mysqli_fetch_assoc($aux_votos)){

        switch($ex_votos['valoracion']){
          case '0':
            $votos_negativos++;
            break;
          case '1':
            $votos_positivos++;
            break;
        }

      }


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

        <div id="comentario_<?php echo $id_comentario;?>" class="col-md-10 offset-md-1 comentario">

          <!-- Añadirle if por si elige anonimo -->
          <h5>
            <?php echo $ex_cliente['nick'];?> -

            <?php
            $valoracion=$ex_comentarios['valoracion'];

            for($i=0;$i<$valoracion;$i++){?>
              <img src="image/estrella_rellenada.png" width="20px" alt="">
            <?php } ?>

            <?php for($i=$valoracion;$i<5;$i++){?>
              <img src="image/estrella_vacia.png" width="20px" alt="">
            <?php } ?>
          </h5>

          <?php

          echo $texto.$leer_mas;

          if($leer_mas!=""){?>
            <br>
            <a href="#" class="leer_mas" id="leer_mas_<?php echo $id_comentario;?>">Leer mas</a>
            <div class="text-right">
              <i class="far fa-thumbs-up fa-2x pointer btn_votar" style="color:green;" id="positivo_<?php echo $id_comentario;?>" valor="1"></i>
              <span id="voto_positivo_<?php echo $id_comentario;?>"><?php echo $votos_positivos; ?></span> votos
              &nbsp;
              <i class="far fa-thumbs-down fa-2x pointer btn_votar" style="color:red;" id="negativo_<?php echo $id_comentario;?>" valor="0"></i>
              <span id="voto_negativo_<?php echo $id_comentario;?>"><?php echo $votos_negativos; ?></span> votos
            </div>
          <?php } ?>

        </div>

    <?php $cont_comentarios++; } ?>

  </div>
</div>

<div id="div_modal_leer_mas"></div>


<script type="text/javascript" src="modulos/comentarios/js/comentarios.js"></script>
