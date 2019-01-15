
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


$('.btn_votar').click(function(){

  var valoracion = $(this).attr('valor');
  var id_comentario = $(this).attr('id').substr('9');

  $.ajax({
    type:'POST',
    url:'modulos/comentarios/sql/valoracion.php',
    data:{
      id_comentario:id_comentario,
      valoracion:valoracion
    },success:function(data){

      switch (data) {
        case 'insertado':
          switch(valoracion){
            case '1':
              $('#voto_positivo_' + id_comentario).html(parseInt($('#voto_positivo_' + id_comentario).html()) + parseInt(1));
              break;
            case '0':
            $('#voto_negativo_' + id_comentario).html(parseInt($('#voto_negativo_' + id_comentario).html()) + parseInt(1));
              break;
            default:

              break;
          }

          break;
        case 'repetido':

          alert('Ya has puntuado este comentario.');

          break;
      }


    }
  });

});
