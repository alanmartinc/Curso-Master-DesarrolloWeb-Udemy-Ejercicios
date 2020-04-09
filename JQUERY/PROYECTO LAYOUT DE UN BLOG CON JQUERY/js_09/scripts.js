// Seleccionando y cambiando atributos
$(function() {
    'use strict';

    // Obtener el valor
    jQuery('.navegacion ul li:first a').attr('href');
    
    // Cambiar el valor
    jQuery('.navegacion ul li:first a').attr('href', 'http://udemy.com');
    
    jQuery('.navegacion ul li:first a').attr('target', '_blank');
    
    // $('main article:first img').attr('src', 'img/imagen_2.jpg');
    
    $('main article:first img').on('click', function() {
      $(this).attr('src', 'img/imagen_2.jpg');
    });  
});