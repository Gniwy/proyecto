<form action="sql/consulta_buscador.php" method="post" class="form-inline col-centrada">
  <div class="col-12 img"></div>
  <div class="row form-group col-9 mx-sm-3 mb-2">

    <!-- seleccionas cualquier localidad/provincia -->
    <input class="col-12 col-sm-6 col-md-6 form-control ui-widget" name="lugar" id="select_lugar" placeholder="Cualquier parte">
    <div id="solucion_localidad"></div>
    <!-- introduces cualquier empresa cualquier empresa -->
    <input class="col-12 col-sm-6 col-md-6 form-control" name="trabajo" id="select_trabajo" placeholder="Cualquier trabajo">

  </div>
  <input type="submit" name="enviar" value="Buscar" id="busqueda_principal" class="btn btn-primary mb-2">
</form>
