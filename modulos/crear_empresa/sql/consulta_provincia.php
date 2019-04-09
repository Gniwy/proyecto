<?php @include_once('../../conexion/conexion.php'); ?>


<?php



  // barra selectora de la provincia
  $consulta = 'SELECT * FROM provincia WHERE 1 ORDER by nombre';
  $sql = mysqli_query($link,$consulta);
  ?>
  <option value=""><?php echo $sql ?></option>
  <?php

  while ($row = mysqli_fetch_assoc($sql))
  {
    ?>

    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>

    <?php
  }

?>
