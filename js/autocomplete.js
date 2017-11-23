$(document).ready(function() {

    $( "#locador" ).autocomplete({
        minLength: 1,
        source: 'livesearch.php',
        focus: function( event, ui ) {
            $( "#locador" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#locador" ).val( ui.item.label );
            $( "#id_locador" ).val( ui.item.value );

            return false;
        }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "</div>" )
        .appendTo( ul );
    };
  });

$(document).ready(function() {

    $( "#imovel" ).autocomplete({
        minLength: 1,
        source: 'livesearch.php',
        focus: function( event, ui ) {
            $( "#imovel" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#imovel" ).val( ui.item.label );
            $( "#id_imovel" ).val( ui.item.value );
            $( "#tipoimovel" ).val(ui.item.teste);

            return false;
        }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "</div>" )
        .appendTo( ul );
    };
  });