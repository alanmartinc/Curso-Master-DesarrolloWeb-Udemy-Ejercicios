// Recorriendo un arreglo
$(function() {
    'use strict';
    
    var proximosViajes = ['Londres', 'Valencia', 'Madrid', 'Paris', 'Milan'];
    console.log(proximosViajes);
    
    $.each(proximosViajes, function(i, v) {
        if(i==0) {
            $('aside').append('<h2>Próximos Viajes</h2>');
        }
        $('aside').append('<li>' + v + '</li>'); 
    });
    
    var viajesPorFecha = {
        primero: 'Londres',
        segundo: 'Valencia',
        tercero: 'Madrid',
        cuarto: 'Paris',
        quinto: 'Milan'
    };

    console.log(viajesPorFecha);
    
    $.each(viajesPorFecha, function(i, v) {
       $('aside').append('<li>' + i + ' - ' + v + '</li>'); 
    }); 
});