<div id="modal_registro" class="modal fade" role="dialog" aria-labelledby="modal_registro_label" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title col-md-9 text-left" id="modal_registro_label">Registro</h4>
        <div class="col-md-3 text-right"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
      </div>
      <div class="modal-body">

        <table>
          <tr>
            <th>Nick: </th>
            <th><input type="text" name="" placeholder="Nickname" id="nick" value=""></th>
          </tr>
          <tr>
            <th>Email: </th>
            <th><input type="text" name="" placeholder="Email" id="email" value=""></th>
          </tr>
          <tr>
            <th>Contraseña: </td>
            <td><input type="password" name="" placeholder="****" id="password" value=""></td>
          </tr>
          <tr>
            <th>Repetir contraseña: </td>
            <td><input type="password" name="" placeholder="****" id="password_2" value=""></td>
          </tr>
          <tr id="password_error">
            <td></td>
            <td style="color:red;">Las contraseñas no coinciden</td>
          </tr>
          <tr id="password_error_longitud">
            <td></td>
            <td style="color:red;">Las contraseña tiene que tener como minimo 6 caracteres.</td>
          </tr>
          <tr id="nick_usado">
            <td></td>
            <td style="color:red;">Nick en uso</td>
          </tr>
          <tr id="email_usado">
            <td></td>
            <td style="color:red;">Email en uso</td>
          </tr>
          <tr>
            <td></td>
            <td><button type="button" class="btn btn-primary" name="button" id="btn_registro">Registrarme</button> <button type="button" id="btn_limpiar_campos_registro" class="btn btn-warning" name="button">Limpiar</button> </td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
