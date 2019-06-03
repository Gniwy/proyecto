<div id="modal_registro" class="modal fade" role="dialog" aria-labelledby="modal_registro_label" aria-hidden="true">
  <div class="modal-dialog registro" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title col-md-9 text-left" id="modal_registro_label">Registro</h4>

      </div>
      <div class="modal-body">
        <input type="text" placeholder="Nickname" id="nick" name="" value="">
                  <p id="nick_usado" style="color:red;">Nick en uso</p>
        <input type="text" placeholder="Email" id="email" name="" value="">
                  <p id="email_usado" style="color:red;">Email en uso</p>
        <input type="password" placeholder="Contraseña" id="password" name="" value="">
                  <p id="password_error_longitud" style="color:red;">Las contraseña tiene que tener como minimo 6 caracteres.</p>
        <input type="password" name="" placeholder="Repetir contraseña" id="password_2" name="" value="">
                  <p id="password_error" style="color:red;">Las contraseñas no coinciden</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" name="button" id="btn_registro">Registrarme</button>
      </div>
    </div>

  </div>
</div>
