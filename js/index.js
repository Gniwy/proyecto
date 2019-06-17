

// Metodos funcionamiento boton subir pagina
$(window).scroll(function() {
  if ($(this).scrollTop() > 100) {
    $('.back-to-top').fadeIn('slow');
    $('#inicio_web').addClass('header-fixed');
  } else {
    $('.back-to-top').fadeOut('slow');
    $('#inicio_web').removeClass('header-fixed');
  }
});


// inserción de footer a la web
$( document ).ready(function() {

  $('#footer').load('modulos/footer/footer.php');

});
