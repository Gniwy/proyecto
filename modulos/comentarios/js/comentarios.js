
$('.leer_mas').click(function(){

  var id_comentario = $(this).attr('id');
  id_comentario = id_comentario.substr(9);

  $.ajax({
    type:'GET',
    url:'modales/modal_leer_mas.php',
    data:{
      id_comentario:id_comentario
    },success:function(data){

      $('#div_modal_leer_mas').html(data);

      setTimeout(function(){
        $('#modal_leer_mas').modal('toggle');
      }, 300);

    }
  });


  return false;
});
