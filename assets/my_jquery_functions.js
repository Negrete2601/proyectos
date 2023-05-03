$(document).ready(function(){
  $("#hs").click(function(){
    $("#more").toggle(2000);
  });
});

$(document).ready(function(){
  $(".btn").on({
  mouseenter : function(){
    $(this).css("background-color", "rgb(18, 76, 121)");
    $(this).css("color", "white");
  },
  mouseleave :function(){
    $(this).css("background-color", "rgb(199, 201, 201)");
    $(this).css("color", "rgb(18, 76, 121)");
  }
  });
});

$(document).ready(function(){
    $("#flip").click(function(){
    $("#panel").slideToggle();
    });
});

  $( function() {
    $( ".calendario" ).datepicker();
      
  } );

$(document).ready(function(){
  $("#tips").click(function(){
    swal.fire({
  title:'Ingrese una contraseña segura',
  html:'<a href="https://www.grupocibernos.com/blog/10-consejos-para-mantener-tus-contrasenas-seguras" target="_blank">Tips</a>',
  confirmButtonText:'Aceptar',
  footer:'Aceptar para seguir navegando',
  width:'30%',
  position:'center',
  allowOutsideClick: false,
  allowEscapekey: false,
  allowEnterkey: false,
  confirmButtonColor:'#269abc',
  confirmButtonAriaLabel:'confirmar',
  showCancelButton: false,
  cancelButtonText:'Cancelar',
  cancelButtonAriaLabel:'Cancelar',
  buttonsStyling: true, 
  showCloseButton: true,
  closeButtonAriaLabel:'cerrar alerta',

  imageUrl:'img/contra.png',
  imageWidth:'100',
  imageAlt:'welcome',
});
  });
});

$(document).ready(function(){
  $(".cuack").focus(function(){
    $(this).css("background-color", "rgb(166, 202, 237)");
  });
  $(".cuack").blur(function(){
    $(this).css("background-color", "white");
  });
});

//Select date range
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  //end select date range

   $( function() {
    $( "#spinner" ).spinner({
      spin: function( event, ui ) {
        if ( ui.value > 60 ) {
          $( this ).spinner( "value", 18 );
          return false;
        } else if ( ui.value < 18 ) {
          $( this ).spinner( "value", 60 );
          return false;
        }
      }
    });
  } );

  //end spinner
    $( function() {
    $( document ).tooltip();
  } );

// barra
  $( function() {
    $( ".slider-range-min" ).slider({
      range: "min",
      value: 370,
      min: 100,
      max: 1000,
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.value );
      }
    });
    $( "#amount" ).val( "$" + $( ".slider-range-min" ).slider( "value" ) );
  } );
