//se ocultan los botones de confirmar y cancelar de todas las filas al cargar la tabla
$(".confirmar_edicion").hide();
$(".cancelar_edicion").hide();


//editar empresas
$('.editar_empresas').click(function(){

  //sacamos el id de la empresa
  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(16);

  //desabilitamos el resto de botones de las filas que no correspondan
  $('.fila_empresas button').attr('disabled','true');
  $('.fila_empresas').css('opacity',0.5);

  //añadimos las propiedades necesarias para los elementos de dicha fila
  $('#empresas_' + id_elemento + ' button').removeAttr('disabled');
  $('#empresas_' + id_elemento).css('opacity',1);
  $('#nombre_' + id_elemento).attr('contenteditable', true);
  $('#nombre_' + id_elemento).css('background', '#fbe3a3');
  $('#calle_' + id_elemento).attr('contenteditable', true);
  $('#calle_' + id_elemento).css('background', '#fbe3a3');
  $('#cp_' + id_elemento).attr('contenteditable', true);
  $('#cp_' + id_elemento).css('background', '#fbe3a3');

  //mostramos los botones de confirmar la edicion y de cancelar de dicha fila
  $("#confirmar_edicion_" + id_elemento).show();
  $("#cancelar_edicion_" + id_elemento).show();

  //ocultamos los botones editar, borrar y bloquear de dicha fila
  $("#editar_empresas_" + id_elemento).hide();
  $("#borrar_empresas_" + id_elemento).hide();
  $("#bloquear_empresas_" + id_elemento).hide();
  $("#desbloquear_empresas_" + id_elemento).hide();

});


//confirmar edicion del usuario
$(".confirmar_edicion").click(function(){

  //sacamos el id del usuario
  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(18);

  //sacamos cual es el nombre , la calle y el cp del empresa a modificar
  var nombre = $('#nombre_' + id_elemento).html();
  var calle = $('#calle_' + id_elemento).html();
  var cp = $('#cp_' + id_elemento).html();


  //por ajax hacemos la peticion al archivo php que se encarga de hacer la modificacion
  $.ajax({
    type:"GET",
    url:"sql/editar_empresas.php",
    data:{
      id:id_elemento,
      nombre:nombre,
      calle:calle,
      cp:cp
    },success:function(data){
      //Se vuelve a cargar la tabla de empresa
      $('#contenido').load('contenido_empresas.php');

    }
  });

});


//cancelar edicion
$(".cancelar_edicion").click(function(){

  //sacamos el id de la empresa
  var id_elemento= $(this).attr('id');

  // el tamaño del nombre del id para solo sacar su id
  id_elemento = id_elemento.substring(17);

  //ocultamos los elementos confirmar y cancelar de dicha fila
  $("#confirmar_edicion_" + id_elemento).hide();
  $("#cancelar_edicion_" + id_elemento).hide();

  //mostramos los botones de editar, borrar y bloquear de dicha fila nuevamente
  $("#editar_empresas_" + id_elemento).show();
  $("#borrar_empresas_" + id_elemento).show();
  $("#bloquear_empresas_" + id_elemento).show();
  $("#desbloquear_empresas_" + id_elemento).show();

  //actualizamos las propiedades de las filas
  $('.fila_empresas button').removeAttr('disabled');
  $('.fila_empresas').css('opacity',1);

  $('#nombre_' + id_elemento).attr('contenteditable', false);
  $('#calle_' + id_elemento).attr('contenteditable', false);
  $('#cp_' + id_elemento).attr('contenteditable', false);


  $('#nombre_' + id_elemento).css('background', 'none');
  $('#calle_' + id_elemento).css('background', 'none');
  $('#cp_' + id_elemento).css('background', 'none');

});

// bloqueamos la empresa borrado logico
$('.bloquear_empresas').click(function(){

  //sacamos el id de la empresa
  var id_elemento= $(this).attr('id');

  // el tamaño del nombre del id para solo sacar su id
  id_elemento = id_elemento.substring(18);

  $.ajax({
    type:"GET",
    url:"sql/bloquear_empresas.php",
    data:{
      id_empresas:id_elemento
    },success:function(data){

      //Se vuelve a cargar la tabla de empresas
      $('#contenido').load('contenido_empresas.php');

    }
  });

});

// desbloqueamos la empresa

$('.desbloquear_empresas').click(function(){

  // sacamos el id de la empresa
  var id_elemento = $(this).attr('id');

  // el tamaño del nombre del id para solo sacar su id
  id_elemento = id_elemento.substring(21);

  $.ajax({
    type:"GET",
    url:"sql/desbloquear_empresas.php",
    data:{
      id_empresas:id_elemento
    },success:function(data){
      // Se vuelve a cargar la tabla de empresas
      $('#contenido').load('contenido_empresas.php');
    }
  });
});


// elimina la empresa de la bbdd

$('.borrar_empresas').click(function(){

  // sacamos el id de la empresa
  var id_elemento = $(this).attr('id');

  // el tamano del nombre del id para solo sacar el id
  id_elemento = id_elemento.substring(16);
alert(id_elemento);
  $.ajax({
    type:"GET",
    url:"sql/eliminar_empresas.php",
    data:{
      id_empresas:id_elemento
    },success:function(data){
      // se vuelve a cargar la tabla de empresas
      $('#contenido').load('contenido_empresas.php');
    }
  });
});
