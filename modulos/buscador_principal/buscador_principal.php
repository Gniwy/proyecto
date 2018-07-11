<form action="sql/consulta_buscador.php" method="post" class="form-inline col-centrada">
  <div class="col-12 img"></div>
  <div class="row form-group col-9 mx-sm-3 mb-2">
    <select class="col-4 col-sm-4 col-md-4 form-control" name="comunidad" id="select_comunidad">
      <option value="1">Todas las comunidades</option>
      <?php
      // barra selectora de la comunidades
        $consulta = "SELECT * FROM `comunidades` WHERE 1";
        $sql = mysqli_query($link,$consulta);

        while ($row = mysqli_fetch_assoc($sql))
        {
          echo '<option value="'.$row['id'].'">'.$row['comunidad'].'</option>';
        }
       ?>
    </select>
    <select class="col-4 col-sm-4 col-md-4 form-control" name="provincia">
      <option value="1">Todas las provincias</option>
      <!-- insertar aqui la consulta_provincia -->
    </select>
    <select class="col-4 col-sm-4 col-md-4 form-control" name="localidad">
      <option value="1">Todas las localidades</option>
      <?php
      // barra selectora de la localidades
        $consulta = "SELECT * FROM `localidad` WHERE 1";
        $sql = mysqli_query($link,$consulta);

        while ($row = mysqli_fetch_assoc($sql))
        {
          echo '<option value="'.$row['cp'].'">'.$row['nombre'].'</option>';
        }
       ?>
    </select>
    <input type="text" class="col-12 form-control" name="trabajo" id="trabajo" placeholder="Ej: Carrefour">
  </div>
  <input type="submit" name="enviar" value="Buscar" class="btn btn-primary mb-2">
</form>
