//ajax devuelta de valores
$.ajax({
  type: 'GET',
  url: 'modulos/buscador_principal/sql/buscador_principal.php',
  data: {

  }, success: function(data){
    var localidades = [$('#select_provincia').html(data)];
    // alert(data);
    var obj = jQuery.parseJSON( '{ "name": '.localidades.' }' );
    // alert( obj.name);
  }
})

// Lugares disponibles
$( function() {
    var availableTags = [
      obj.name;
      // localidades
      // "Ámsterdam",
      // "Haarlem",
      // "Zaanstad",
      // "Haarlemmermeer",
      // "Alkmaar",
      // "Amstelveen",
      // "Hilversum",
      // "Nissewaard4",
      // "Purmerend",
      // "Hoorn",
      // "Velsen",
      // "Heerhugowaard",
      // "Róterdam",
      // "Rijswijk",
      // "Zoetermeer",
      // "Leiden",
      // "Dordrecht",
      // "Westland",
      // "Delft",
      // "Schiedam",
      // "Spijkenisse",
      // "Vlaardingen",
      // "Gouda",
      // "Katwijk",
      // "Lansingerland",
      // "Krimpenerwaard",
      // "Utrecht",
      // "Amersfoort",
      // "Veenendaal",
      // "Zeist",
      // "Nieuwegein",
      // "Eindhoven",
      // "Tilburgo",
      // "Breda",
      // "Bolduque",
      // "Helmond",
      // "Oss",
      // "Roosendaal",
      // "Oosterhout",
      // "Groningen",
      // "Almere",
      // "Lelystad",
      // "Nimega",
      // "Apeldoorn",
      // "Arnhem",
      // "Ede",
      // "Doetinchem",
      // "Barneveld",
      // "Enschede",
      // "Zwolle",
      // "Deventer",
      // "Hengelo",
      // "Almelo",
      // "Hardenberg",
      // "Kampen",
      // "Emmen",
      // "Assen",
      // "Hoogeveen",
      // "Terneuzen",
      // "Leeuwarden",
      // "Smallingerland",
      // "Heerenveen",
      // "Maastricht",
      // "Venlo",
      // "Heerlen",
      // "Roermond",
      // "Gooise Meren",
      // "Den Helder",
      // "La Haya",
      // "Alphen aan den Rijn",
      // "Leidschendam-Voorburg",
      // "Capelle aan den IJssel",
      // "Pijnacker-Nootdorp",
      // "Bergen op Zoom",
      // "De Fryske Marren",
      // "Sittard-Geleen",
      // // Provincias
      // "Brabante Septentrional",
      // "Drente",
      // "Flevoland",
      // "Frisia",
      // "Groninga",
      // "Güeldres",
      // "Limburgo",
      // "Overijssel",
      // "Utrecht",
      // "Zelanda",
      // "Holanda Meridional",
      // "Holanda Septentrional"
    ];
    $( "#select_lugar" ).autocomplete({
      source: availableTags
    });
  } );

// trabajos disponibles
  $( function() {
      var availableTags = [
        "Abogado",
        "Administrador",
        "Camarero",
        "Carpintero"
      ];
      $( "#select_trabajo" ).autocomplete({
        source: availableTags
      });
    } );
