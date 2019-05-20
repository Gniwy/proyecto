
// habilitar boton submit
$("#nuevosDatos").attr('disabled','disabled');


$("#aceptarTerminos").click(function() {

  $("#nuevosDatos").attr("disabled", !this.checked);

});



var bandNick = 0;
var bandPwd = 0;

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

  if (bandPwd==10) {
alert('entro --- ');
    // $.ajax({
    //
    //   type:"POST",
    //   url:"sql/updateUser.php",
    //   data:{
    //     id_user:$("#id_user").val(),
    //     nick:$("#newNick").val(),
    //     password:$("#newPassword").val(),
    //   }, success:function(data){
    //
    //   }
    //
    // });

  }

})
