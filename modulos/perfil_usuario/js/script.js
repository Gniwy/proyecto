
// habilitar boton submit
$("#nuevosDatos").attr('disabled','disabled');




  $("#aceptarTerminos").click(function() {

      $("#nuevosDatos").attr("disabled", !this.checked);
  });


var band = 0;


$("#nuevosDatos").click(function(){

  if ($('#newNick').val() == "") {

    $('#nick_req').css('display', 'block');

  }else {
    band+=5;
    $('#nombre_req').css('display', 'none');
  }

  // if ($('#newNick').val()!=null || $('#newNick').val()!="") {
  //   band=0;
  //   $('#nick_req').css('display', 'none');
  //
  // }else {
  //   $('#nick_req').css('display', 'block');
  // }

  if ($('#newPassword').val()!=null || $('#newPassword').val()!="") {

    $('#pwd_req').css('display', 'block');

  }else {
    band+=5;
    $('#pwd_req').css('display', 'none');
  }
  $('#band_perfil_user').val(band);

  if (band==10) {

    $.ajax({

      type:"POST",
      url:"sql/updateUser.php",
      data:{
        id_user:$("#id_user").val(),
        nick:$("#newNick").val(),
        password:$("#newPassword").val(),
      }, success:function(data){

      }

    });

  }else {
    alert('complete los campos');
  }

})
