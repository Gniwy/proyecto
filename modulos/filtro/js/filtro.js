
// setTimeout(function(){alert("codigo");},2000);

var filtro1 = 0;
var filtro2 = 0;
var filtro3 = 0;
var filtro4 = 0;

//Código jquery para detectar cuándo se activa el checkbox
$("#c1").change(function() {
    //Si el checkbox está seleccionado
    if($(this).is(":checked")) {
      filtro1 = "c2";
    }
    else {
      filtro1 = 0;
    }

    $.ajax({
      type: 'GET',
      url: 'modulos/filtro/sql/select_filtro.php',
      data:{
        filtro1:filtro1,
        filtro2:filtro2,
        filtro3:filtro3,
        filtro4:filtro4
      },success: function(data){
        console.log(data);
      }
    });

  });

//Código jquery para detectar cuándo se activa el checkbox
$("#c2").change(function() {
    //Si el checkbox está seleccionado
    if($(this).is(":checked")) {
      filtro2 = "c2";
    }
    else {
      filtro2 = 0;
    }

    $.ajax({
      type: 'GET',
      url: 'modulos/filtro/sql/select_filtro.php',
      data:{
        filtro1:filtro1,
        filtro2:filtro2,
        filtro3:filtro3,
        filtro4:filtro4
      },success: function(data){
        console.log(data);
      }
    });

  });
//Código jquery para detectar cuándo se activa el checkbox
$("#c3").change(function() {
    //Si el checkbox está seleccionado
    if($(this).is(":checked")) {
      filtro3 = "c3";
    }
    else {
      filtro3 = 0;
    }

    $.ajax({
      type: 'GET',
      url: 'modulos/filtro/sql/select_filtro.php',
      data:{
        filtro1:filtro1,
        filtro2:filtro2,
        filtro3:filtro3,
        filtro4:filtro4
      },success: function(data){
        console.log(data);
      }
    });
  });
//Código jquery para detectar cuándo se activa el checkbox
$("#c4").change(function() {
    //Si el checkbox está seleccionado
    if($(this).is(":checked")) {
      filtro4 = "c4";
    }
    else {
      filtro4 = 0;
    }

    $.ajax({
      type: 'GET',
      url: 'modulos/filtro/sql/select_filtro.php',
      data:{
        filtro1:filtro1,
        filtro2:filtro2,
        filtro3:filtro3,
        filtro4:filtro4
      },success: function(data){
        console.log(data);
      }
    });

  });

/*

$.ajax({
  type: 'POST',
  url: 'modulos/filtro/sql/select_filtro.php',
  data:{
    filtro1:filtro1,
    filtro2:filtro2,
    filtro3:filtro3,
    filtro4:filtro4
  },success: function(data){
    // alert(filtro1);
  }
});

*/
