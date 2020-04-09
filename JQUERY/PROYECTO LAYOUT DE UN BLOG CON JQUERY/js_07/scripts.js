// Navegando a traves del DOM
$(function() {
    'use strict';

    // en Consola
    $('.navegacion');
    
    $('.navegacion').children();
   
    $('.navegacion').children().children();
    
    $('.navegacion').parent();
    
    $('.navegacion').next();
    
    $('.navegacion').next().next();   
});