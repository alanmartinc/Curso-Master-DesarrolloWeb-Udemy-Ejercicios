// Agregando o quitando clases
$(function() {
    'use strict';
    
    /*
    jQuery('div.logo img').addClass('activo');
    */

    jQuery('.navegacion').show();
    jQuery('main article').addClass('activo');
    
    jQuery('.navegacion ul li a').on('click', function(e) {
        // jQuery('.navegacion ul li a').removeClass('activo');
        e.preventDefault();
       $(this).addClass('activo'); 
    });  
});