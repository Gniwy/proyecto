


$( ".progressbar" ).progressbar({
  value: 600,
  max: 1024,
  create: function(event, ui) {$(this).find('.ui-widget-header').css({'background-color':'green'})}
});
