var agregarContacto = document.getElementById('agregar');
var formulario = document.getElementById('formulario_crear_usuario');
var action = formulario.getAttribute('action');
var divCrear = document.getElementById('crear_contacto');
var tablaRegistrados = document.getElementById('registrados');
var checkboxes = document.getElementsByClassName('borrar_contacto');
var btn_borrar = document.getElementById('btn_borrar');
var tableBody = document.getElementsByTagName('tbody');
var divExistentes = document.getElementsByClassName('existentes');
var inputBuscador = document.getElementById('buscador');
var totalRegistros = document.getElementById('total');

function actualizarNumero() {
    var registros = tableBody[0].getElementsByTagName('tr');
    var cantidad = 0;
    var ocultos = 0;
    
    for( var i = 0; i < registros.length; i++) {
        var elementos = registros[i];
        if(elementos.style.display == 'table-row'){
          cantidad++;
          totalRegistros.innerHTML = cantidad;
        } else {
          if(elementos.style.display == 'none') {
            ocultos++;
              if(ocultos == registros.length) {
                ocultos -= registros.length;
                totalRegistros.innerHTML = ocultos;
            }
          }
        }
    }
}

function registroExitoso(nombre) {
  
  // crear div y agregar un id
  var divMensaje =document.createElement('DIV');
  divMensaje.setAttribute('id', "mensaje");
  
  // agregar texto
  var texto = document.createTextNode('Creado: ' + nombre);
  divMensaje.appendChild(texto);
  divCrear.insertBefore(divMensaje, divCrear.childNodes[4]);
  
  // agrgar la clase mostrar
  divMensaje.classList.add('mostrar');
  
  // ocultar el mensaje de creación
  setTimeout(function() {
    divMensaje.classList.add('ocultar');
    setTimeout(function() {
        var divPadreMensaje = divMensaje.parentNode;
        divPadreMensaje.removeChild(divMensaje);
    }, 500);
  }, 3000);
}

// construir template para insertar datos dinamicamente
function construirTemplate(nombre, telefono, registro_id) {
    // crear  nombre de contacto
    var tdNombre = document.createElement('TD');
    var textoNombre = document.createTextNode(nombre);
    tdNombre.appendChild(textoNombre);
    
    // crear telefono de contacto
    var tdTelefono = document.createElement('TD');
    var textoTelefono = document.createTextNode(telefono);
    tdTelefono.appendChild(textoTelefono);
    
    // crear enlace para editar
    var nodoBtn = document.createElement('A');
    var textoEnlace = document.createTextNode('Editar');
    nodoBtn.appendChild(textoEnlace);
    nodoBtn.href = 'editar.php?id=' + registro_id;
    
    // agregar el boton al td
    var notoTdEditar = document.createElement('TD');
    notoTdEditar.appendChild(nodoBtn);
    
    // crear checkbox para borrar
    var checkBorrar = document.createElement('INPUT');
    checkBorrar.type = 'checkbox';
    checkBorrar.name = registro_id;
    checkBorrar.classList.add('borrar_contacto');
    
    // agregar td a checkbox
    var tdCheckbox = document.createElement('TD');
    tdCheckbox.classList.add('borrar');
    tdCheckbox.appendChild(checkBorrar);
    
    // agregar al TR
    var trContacto = document.createElement('TR');
    trContacto.setAttribute('id', registro_id);
    trContacto.appendChild(tdNombre);
    trContacto.appendChild(tdTelefono);
    trContacto.appendChild(notoTdEditar);
    trContacto.appendChild(tdCheckbox);
    
    tablaRegistrados.childNodes[3].append(trContacto);
    
    actualizarNumero();
}

function crearUsuario() {
    var form_datos = new FormData(formulario);
    for([key, value] of form_datos.entries()) {
      console.log(key + ": " + value);
    } 

    var xhr = new XMLHttpRequest();
    xhr.open('POST', action, true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            var resultado = xhr.responseText;
            console.log(resultado);
            var json = JSON.parse(resultado);
            if(json.respuesta == true) {
                registroExitoso(json.nombre);
                construirTemplate(json.nombre, json.telefono, json.id);
                var totalActualizado = parseInt(totalRegistros.textContent) + 1;
                totalRegistros.innerHTML = totalActualizado;
            }
        }
    }
    xhr.send(form_datos);
}

function mostrarEliminado() {
  // crear div y agregar id
  var divEliminado = document.createElement('DIV');
  divEliminado.setAttribute('id', 'borrado');
  
  // agregar texto
  var texto = document.createTextNode('Eliminado de lista de contactos');
  divEliminado.appendChild(texto);
  divExistentes[0].insertBefore(divEliminado, divExistentes[0].childNodes[0]);
  
  // agregar clase de CSS
  divEliminado.classList.add('mostrar');
  
  // ocultar el mensaje de creación
  setTimeout(function() {
    divEliminado.classList.add('ocultar');
    setTimeout(function() {
        var divPadreMensaje = divEliminado.parentNode;
        divPadreMensaje.removeChild(divEliminado);
    }, 500);
  }, 3000);
}

function eliminarHTML(ids_borrados) {
    for(i = 0; i <  ids_borrados.length;i++) {
        var elementoBorrar = document.getElementById(ids_borrados[i]);
        tableBody[0].removeChild(elementoBorrar);
    }
}

function contactosEliminar(contactos) {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'borrar.php?id=' + contactos, true );
  console.log('borrar.php?id=' + contactos);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
        var resultadoBorrar = xhr.responseText;
        var json = JSON.parse(resultadoBorrar);
        if(json.respuesta == false) {
            alert("seleccione un elemento");
        } else {
            console.log('Resultado: ' + resultadoBorrar);
            eliminarHTML(contactos);
            mostrarEliminado();
            var totalActualizado = parseInt(totalRegistros.textContent) - json.borrados;
            totalRegistros.innerHTML = totalActualizado;
        }
    }
};
  xhr.send();
}

function checkboxSeleccionado() {
  var contactos = [];
  for(i = 0; i < checkboxes.length;i++) {
    if(checkboxes[i].checked == true) {
        contactos.push(checkboxes[i].name);
    }
  }
  contactosEliminar(contactos);
}

for(var i = 0; i < checkboxes.length; i++) {
  checkboxes[i].addEventListener('change', function() {
    if(this.checked) {
        this.parentNode.parentNode.classList.add('activo');
    } else {
        this.parentNode.parentNode.classList.remove('activo');
    }
  });
}

agregarContacto.addEventListener('click', function(e) {
  e.preventDefault();
  crearUsuario();
});

btn_borrar.addEventListener('click', function() {
    checkboxSeleccionado();
});

function ocultarRegistros(nombre_buscar){
    // variable para todos los registros
    var registros = tableBody[0].getElementsByTagName('tr');
    
    // expresion regular que busca el nombre con case insensitive
    var expression = new RegExp(nombre_buscar, "i");
    
    for(var i = 0; i < registros.length;i++) {
        registros[i].classList.add('ocultar');
        registros[i].style.display = 'none';
        
        if(registros[i].childNodes[1].textContent.replace(/\s/g, "").search(expression) != -1 || nombre =='') {
            registros[i].classList.add('mostrar');
            registros[i].classList.remove('ocultar');
            registros[i].style.display = 'table-row';
        } 
    }
    actualizarNumero();
}

inputBuscador.addEventListener('input', function() {
  ocultarRegistros(this.value);
});


