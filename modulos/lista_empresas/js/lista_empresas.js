
$('.empresa').click(function(){

  //sacamos el id de la empresa
  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(8);

  location.href = 'ficha_empresa.php?id_empresa=' + id_elemento;



});
