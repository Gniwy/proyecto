


$( ".progressbar" ).progressbar({
  value: 600,
  max: 1024,
  create: function(event, ui) {$(this).find('.ui-widget-header').css({'background-color':'green'})}
});


$('.filtro_estrella').mouseover(function(){

  var id_estrella = $(this).attr('id');
  id_estrella = id_estrella.substr(16);

  for(var i=0;i<=id_estrella;i++){
    $('#filtro_estrella_'+i).attr('src','image/estrella_rellenada.png');
  }


});

$('.filtro_estrella').mouseout(function(){

  for(var i=0;i<5;i++){
    $('#filtro_estrella_'+i).attr('src','image/estrella_vacia.png');
  }

});

// Estrellas del comentario
var clickeado=false;

$('.comentario_estrella').mouseover(function(){
  if(!clickeado){
    var id_estrella = $(this).attr('id');
    id_estrella = id_estrella.substr(20);

    for(var i=0;i<=id_estrella;i++){
      $('#comentario_estrella_'+i).attr('src','image/estrella_rellenada.png');
    }
  }

});

$('.comentario_estrella').mouseout(function(){
  if(!clickeado){
    for(var i=0;i<5;i++){
      $('#comentario_estrella_'+i).attr('src','image/estrella_vacia.png');
    }
  }

});

$('.comentario_estrella').click(function(){

  clickeado=true;

  var id_estrella = $(this).attr('id');
  id_estrella = id_estrella.substr(20);

  for(var i=0;i<=id_estrella;i++){
    $('#comentario_estrella_'+i).attr('src','image/estrella_rellenada.png');
  }

  for(var i=(parseInt(id_estrella)+parseInt(1));i<=6;i++){
    $('#comentario_estrella_'+i).attr('src','image/estrella_vacia.png');
  }

});


$('.relevante_leer_mas').click(function(){

  var id_comentario = $(this).attr('id');
  id_comentario = id_comentario.substr(10);

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


$('.btn_votar_relevante').click(function(){

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
              location.reload(true);
              break;
            case '0':
              location.reload(true);
              break;
            default:

              break;
          }

          break;
        case 'repetido':

          alert('Ya has puntuado este comentario.');

          break;
        default:
          alert('Tienes que estar registrado para poder puntuar.');
          break;
      }


    }
  });

});
