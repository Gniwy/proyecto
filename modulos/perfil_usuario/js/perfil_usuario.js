
// habilitar boton submit
$("#nuevosDatos").attr('disabled','disabled');



var bandNick = 0;
var bandPwd = 0;
var band = 0;
var terminos = 0;

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


$("#nuevosDatos").click(function(){

  if ($('#newNick').val() == "" || ( $('#newNick').val().length >= 15 && $('#newNick').val().length<5) ) {

    $('#nick_req').css('display', 'block');
    bandNick=0;

  }else {
    bandNick=5;
  }

  if ($('#newPassword').val() == "") {

    $('#pwd_req').css('display', 'block');
    bandPwd=0;

  }else {
    bandPwd=5;

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
