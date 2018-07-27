//buscador de usuarios
$('#buscador_usuarios').keyup(function(){

  //sacamos el texto del buscador
  var texto = $(this).val();

  //actualizamos la tabla mandandole el valor del buscador
  $('#tabla_usuarios').load('tabla_usuarios.php?texto=' + texto);


});
