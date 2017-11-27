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

    $( "#inquilino" ).autocomplete({
        minLength: 1,
        source: 'livesearch-inquilino.php',
        focus: function( event, ui ) {
            $( "#inquilino" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#inquilino" ).val( ui.item.label );
            $( "#id_inquilino" ).val( ui.item.value );

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
            $( "#tipoimovel" ).val(ui.item.tipoimovel);

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
    $( "#ambiente" ).autocomplete({
        minLength: 1,
        source: 'livesearch-ambiente.php',
        focus: function( event, ui ) {
            $( "#ambiente" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#ambiente" ).val( ui.item.label );
            $( "#id_ambiente" ).val( ui.item.value );

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
    $( "#update_ambiente" ).autocomplete({
        minLength: 1,
        source: 'livesearch-ambiente.php',
        focus: function( event, ui ) {
            $( "#ambiente" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#update_ambiente" ).val( ui.item.label );
            $( "#update_id_ambiente" ).val( ui.item.value );

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
    $( "#item" ).autocomplete({
        minLength: 1,
        source: 'livesearch-item.php',
        focus: function( event, ui ) {
            $( "#item" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#item" ).val( ui.item.label );
            $( "#id_item" ).val( ui.item.value );

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
    $( "#cor" ).autocomplete({
        minLength: 1,
        source: 'livesearch-cor.php',
        focus: function( event, ui ) {
            $( "#cor" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#cor" ).val( ui.item.label );
            $( "#id_cor" ).val( ui.item.value );

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
    $( "#material" ).autocomplete({
        minLength: 1,
        source: 'livesearch-material.php',
        focus: function( event, ui ) {
            $( "#material" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#material" ).val( ui.item.label );
            $( "#id_material" ).val( ui.item.value );

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
    $( "#pintura" ).autocomplete({
        minLength: 1,
        source: 'livesearch-pintura.php',
        focus: function( event, ui ) {
            $( "#pintura" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#pintura" ).val( ui.item.label );
            $( "#id_pintura" ).val( ui.item.value );

            return false;
        }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "</div>" )
        .appendTo( ul );
    };
  });