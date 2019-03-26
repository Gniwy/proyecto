
// setTimeout(function(){alert("codigo");},2000);

//NOTA IMPORTANTE RECORDATORIO
/*
1 -> Más comentada
2 -> Más extendida
3 -> Más recomendada
4 -> Mas puntuada
*/

//Código jquery para detectar cuándo se activa el checkbox
$(".check_filtro").click(function() {
  var checked = [];

  $("input[name='check_filtro']:checked").each(function ()
  {

    checked.push(parseInt($(this).val()));

  });

    // $(".check_filtro").each(function(){
    //
    //   var nombre_filtro = $(this).attr('name');
    //
    //   //Si el checkbox está seleccionado
    //   if($(this).is(":checked")) {
    //     check_filtro = 'si';
    //   }else{
    //     check_filtro = 'no';
    //   }
    //
    //   // array_push(nombre_filtro,'si');
    // });


    $.ajax({
      type:'GET',
      url:'modulos/lista_empresas/lista_empresas.php',
      data:{
        checked:checked
      },success:function(data){
        $('#busqueda_vista2').html(data);
      }
    });


  });
