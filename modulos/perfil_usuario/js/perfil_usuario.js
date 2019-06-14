
// habilitar boton submit
$("#nuevosDatos").attr('disabled','disabled');

// crearmos unas variable para comprobar que estan todos los campos rellenado correctamente
var bandNick = 0;
var bandPwd = 0;
var bandPwd2 = 0;
var terminos = 0;
var band = 0;

// check aceptarTerminos
$("#aceptarTerminos").click(function() {

  $("#nuevosDatos").attr("disabled", !this.checked);

  if( $('#aceptarTerminos').prop('checked') ) {//comprobar que el chek esta activado
    terminos = 1;
  }

});

$('#newNick').keyup(function(){

  $('#nick_req').css('display', 'none');

});
$('#newPassword').keyup(function(){

  $('#pwd_req').css('display', 'none');

});
$('#comprobarPassword').keyup(function(){

  $('#pwd_req2').css('display', 'none');

});


// el nick debe ser superior a 5 e inferior a 15
$("#nuevosDatos").click(function(){
  // sacamos variable para manejarla mas facil (nick)
  var nombreUser = $('#newNick').val();

  if (nombreUser != '' && ( nombreUser.length < 16 || nombreUser.length >= 5) ) {

    bandNick=5;

  }else {
    $('#nick_req').css('display', 'block');
    bandNick=0;
  }


  // sacamos variables para manejarlas mas facil (pwd)
  var contrasena       = $("#newPassword").val();
  var confirContrasena = $("#comprobarPassword").val();

  // el pwd debe ser superior a 6 caracteres
  if ( (contrasena !='' && contrasena.length >= 6) && (confirContrasena != '')) {

    if (contrasena === confirContrasena) {

      bandPwd=5;

    }else {
      $('#pwd_req2').css('display', 'block');
      bandPwd2=0;
    }
  }else {
    $('#pwd_req').css('display', 'block');
    bandPwd=0;
  }


  // comprobacion parametros completados
  band = bandNick+bandPwd+terminos;

  if (band==11) {

    $.ajax({
      type:"POST",
      url:"modulos/perfil_usuario/sql/updateUser.php",
      data:{
        id_user:$("#id_user").val(),
        nick:$("#newNick").val(),
        password:$("#newPassword").val(),
      }, success:function(data){
        // location.href ="https://www.ireferences.es";
        location.href ="./";
      }
    });

  }

})
