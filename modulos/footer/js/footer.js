
$('#btn_enviar_correo').click(function(){

  $.ajax({
    type:'POST',
    url:'modulos/footer/php/enviar_correo.php',
    data:{
      asdf:'asdf'
    }, success: function(data){

        window.location.href = "../crear_empresa/sql/datosCrearEmpresa.php";

    }
  });

});
