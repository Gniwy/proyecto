<div id="modal_login" class="modal fade" role="dialog" aria-labelledby="modal_login_label" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title col-md-9 text-left" id="modal_login_label">Login</h4>
        <div class="col-md-3 text-right"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
      </div>
      <div class="modal-body">

        <table>
          <tr>
            <th>Nick o email: </th>
            <th><input type="text" name="" placeholder="Nickname" id="nick_email_login" value=""></th>
          </tr>
          <tr>
            <th>Contraseña: </td>
            <td><input type="password" name="" placeholder="****" id="password_login" value=""></td>
          </tr>
          <tr>
            <th></td>
            <td> <button type="button" class="btn btn-primary" name="button" id="btn_iniciar_sesion">Iniciar sesion</button> </td>
          </tr>
          <tr id="error_login">
            <td></td>
            <td style="color:red;">Email / contraseña incorrecta.</td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
