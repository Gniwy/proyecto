// habilitar boton submit
$("#nuevosDatos").attr('disabled','disabled');

$("#aceptarTerminos").click(function() {
  $("#nuevosDatos").attr("disabled", !this.checked);
});

$("#nuevosDatos").click(function(){

  $.ajax({

    type:"POST",
    url:"sql/updateUser.php",
    data:{
      id_user:$("#id_user").val(),
      nick:$("#newNick").val(),
      password:$("#newPassword").val(),
      direccion:$("#address").val(),
      ciudad:$("#city").val(),
      sexo:$("#sexo").val(),
      cp:$("#cp").val()
    }, success:function(data){

    }

  });

})
