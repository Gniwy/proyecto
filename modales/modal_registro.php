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


        <!-- <table>
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
        </table> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" name="button" id="btn_registro">Registrarme</button>
      </div>
    </div>

  </div>
</div>
