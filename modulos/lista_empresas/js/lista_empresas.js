
$('.empresa').click(function(){

  //sacamos el id de la empresa
  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(8);

  $.ajax({
    type: 'GET',
    url: 'modulos/ficha_empresa/ficha_empresa.php',
    data:{
      id_empresa:id_elemento
    },
    success: function(data){
      $('#contenido_vista2').html(data);
    }
  });


});
