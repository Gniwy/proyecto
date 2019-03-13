
// setTimeout(function(){alert("codigo");},2000);



//Código jquery para detectar cuándo se activa el checkbox
$(".check_filtro").click(function() {

    $(".check_filtro").each(function(){

      var nombre_filtro = $(this).attr('name');

      //Si el checkbox está seleccionado
      if($(this).is(":checked")) {
        check_filtro = 'si';
      }else{
        check_filtro = 'no';
      }

      array_push(nombre_filtro,'si');
    });


    $.ajax({
      type:'GET',
      url:'modulos/lista_empresas/lista_empresas.php',
      data:{
        nombre_filtro:nombre_filtro,
        check_filtro:check_filtro
      },success:function(data){
        $('#busqueda_vista2').html(data);
      }
    });


  });
