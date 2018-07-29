//buscador de empresas
$('#buscador_empresas').keyup(function(){

  //sacamos el texto del buscador
  var texto = $(this).val();

  //actualizamos la tabla mandandole el valor del buscador
  $('#tabla_empresas').load('tabla_empresas.php?texto=' + texto);


});
