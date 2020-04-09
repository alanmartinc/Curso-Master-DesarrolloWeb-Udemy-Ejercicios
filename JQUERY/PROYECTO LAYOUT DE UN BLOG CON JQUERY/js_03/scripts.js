// Clonando contenido
$(function() {
    'use strict';
    
    // Borrar Elemento
    // $('main article:first').remove();
    
    // Ocultar elemento
    // $('main article:first').hide();
    
    // Clonar elemento y agregarlo al final
    // var copia = $('main article:last').clone();
    // $('main').append(copia);

    // Clonar elemento y agregarlo al inicio
    // var copia = $('main article:last').clone();
    // $('main').prepend(copia);
    
    // Otra forma
    var copia = $('main article:last').clone();
    $(copia).prependTo('main');   
});