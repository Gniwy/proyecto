<link rel="stylesheet" href="modulos/footer/css/footer.css">

<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- newsPaper -->
      <div class="col-12 footer-correo">
        <form>
          <div class="col-12 col-sm-6">
              <input type="email" class="form-control contentForm" id="correo_cliente" placeholder="Correo">
          </div>
          <div class="col-12 col-sm-6">
              <input type="text" class="form-control contentForm" id="mensaje_cliente" placeholder="mensaje">
          </div>
          <fieldset class="form-group">
            <button type="button" class="btn btn-primary btn-sm btn_2" id="btn_enviar_correo">Enviar</button>
          </fieldset>
        </form>
      </div>

      <div class="col-md-12">
        <div class="row">
          <div class="col-12 legalText">
            <ul class="list-unstyled">
              <li> <a href="modulos/informacionWeb/queEs.php" target="_black" style="color: #e89620;">Que es IR</a> </li>
              <li><a href="modulos/legal_notices/esp/aviso_legal.html"  target="_black">Avisos Legal</a></li>
              <li><a href="modulos/legal_notices/esp/terminos_y_condiciones.html"  target="_black">Terminos y Condiciones</a></li>
              <li><a href="modulos/legal_notices/esp/cookies.html"  target="_black">Politica de Cookie</a></li>
              <li><a href="modulos/legal_notices/esp/politicas_de_privacidad.html"  target="_black">Politica de privacidad</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript">


$('#btn_enviar_correo').click(function(){

  var correo_cliente = $('#correo_cliente').val();
  var mensaje_cliente = $('#mensaje_cliente').val();

  $.ajax({
    type:'POST',
    url:'modulos/footer/php/enviar_correo.php',
    data:{
      correo_cliente:correo_cliente,
      mensaje_cliente:mensaje_cliente
    }, success: function(data){
      console.log(data);

    }
  });

});

</script>
