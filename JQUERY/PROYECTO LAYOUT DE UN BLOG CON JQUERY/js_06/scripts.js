// Manejando eventos
$(function() {
    'use strict';
    
$("main").on({
  click: function() {
    $(this).addClass('fondorojo');
  }, mouseenter: function() {
    $(this).addClass('activo');
  }, mouseleave: function() {
      $(this).removeClass('activo fondorojo');
  }
});

});