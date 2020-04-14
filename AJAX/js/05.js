// pasos para la creación de un request

var btnCargar = document.getElementById('cargar');

function cargarContenido() {
  // crearlo
  var xhr = new XMLHttpRequest();

   // abrirlo
   xhr.open("GET", "texto_prueba.txt", true);
   
   // revisar que cambie
   xhr.onreadystatechange = function() {
      //console.log(xhr.readyState);
      
      if(xhr.readyState == 4 && xhr.status == 200) {
         //console.log("Se cargo correctamente");
          
         var contenido = document.getElementById('contenido');
         contenido.innerHTML = xhr.responseText;
      } 
   };

   xhr.send(); 
}

btnCargar.addEventListener('click', cargarContenido);


