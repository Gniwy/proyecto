console.log('asdf');
$('#btn_enviar_correo').click(function(){
  alert('asdf');
  $.ajax({
    type:'POST',
    url:'modulos/footer/php/enviar_correo.php',
    data:{
      asdf:'asdf'
    }, success: function(data){
      alert(data);
        // window.location.href = "../crear_empresa/sql/datosCrearEmpresa.php";

    }
  });

});

});
