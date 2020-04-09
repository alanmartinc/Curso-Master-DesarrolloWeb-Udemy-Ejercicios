// Cambiar CSS de un elemento
$(function() {
    'use strict';
    
    // Cambiando el width 
    $('.logo img').css({'width': '200px'});
    
    // Cambiando el color de texto
    $('main article h2').css({'color': '#db008d'});
    
    // CSS de muchas lineas
    $('aside').css({'background-color': '#e1e1e1', 
                    'text-transform': 'uppercase',
                    'padding' : '20px'
                   });
    
   $('.navegacion ul li a').on('mouseenter', cambiarColor);
    
    function cambiarColor() {
       $('.navegacion').css('background-color', 'red');
    }
});