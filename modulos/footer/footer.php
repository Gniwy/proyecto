

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-12 legalText">
            <ul class="list-unstyled">
              <li><a href="modulos/legal_notices/esp/aviso_legal.html"  target="_black">Avisos Legal</a></li>
              <li><a href="modulos/legal_notices/esp/terminos_y_condiciones.html"  target="_black">Terminos y Condiciones</a></li>
              <li><a href="modulos/legal_notices/esp/cookies.html"  target="_black">Politica de Cookie</a></li>
              <li><a href="modulos/legal_notices/esp/politicas_de_privacidad.html"  target="_black">Politica de privacidad</a></li>
            </ul>
          </div>
        </div>
        <br>
      </div>
      <div class="col-12">
        <form>
          <div class="col-12 col-sm-6">
              <input type="email" class="form-control contentForm" id="exampleInputEmail1" placeholder="Correo">
          </div>
          <div class="col-12 col-sm-6">
              <input type="text" class="form-control contentForm" id="exampleMessage" placeholder="mensaje">
          </div>
          <fieldset class="form-group">
            <button type="button" class="btn btn-primary btn-sm btn_2" id="btn_enviar_correo">Enviar</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript">


$('#btn_enviar_correo').click(function(){

  var email = $('#exampleInputEmail1').val();
  var email = $('#exampleInputEmail1').val();

  $.ajax({
    type:'POST',
    url:'modulos/footer/php/enviar_correo.php',
    data:{
      asdf:'asdf'
    }, success: function(data){
      alert(data);

    }
  });

});

</script>
