// pasos para la creación de un request

var btnCargar = document.getElementById('cargar');

function cargarContenido() {
  // crearlo
  var xhr = new XMLHttpRequest();

   // abrirlo
   xhr.open("GET", "servidor.php", true);
   
   // revisar que cambie
   xhr.onreadystatechange = function() {

      //console.log(xhr.readyState);
      if(xhr.readyState == 4 && xhr.status == 200) {
         //console.log("Se cargo correctamente");
         var json = JSON.parse(xhr.responseText);
          
         var contenido = document.getElementById('contenido');
         contenido.innerHTML = json.fullstack;
      } 
   };
   xhr.send(); 
}

btnCargar.addEventListener('click', cargarContenido);


