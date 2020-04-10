(function() {
    "user strict";

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function(){

        // Campos - Datos usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        // Campos - Pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dos_dias = document.getElementById('pase_dos_dias');
        var pase_completo = document.getElementById('pase_completo');

        // Botones y Divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var btnRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista_productos');
        var suma = document.getElementById('suma_total');

        // Extras
        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');

        if(document.getElementById('calcular')){
        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dos_dias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);

        function validarCampos() {
            if(this.value == '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Este campo es obligatorio";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            } else {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }

        function validarMail() {
            if(this.value.indexOf("@") > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Debe tener al menor una @";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }
        }

        function calcularMontos(event) {
            event.preventDefault();
            if(regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus();
            } else {
                var boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletosDosDias = parseInt(pase_dos_dias.value, 10) || 0,
                    boletosPaseCompleto = parseInt(pase_completo.value, 10) || 0,
                    cantCamisas = parseInt(camisas.value, 10) || 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10) || 0;
                
                var totalPagar = (boletosDia * 30) + (boletosDosDias * 45) + (boletosPaseCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                var listadoProductos = [];

                if (boletosDia >= 1) {
                    listadoProductos.push(boletosDia + ' Pases por día');
                }

                if (boletosDosDias >= 1) {
                    listadoProductos.push(boletosDosDias + ' Pases por dos días');
                }

                if (boletosPaseCompleto >= 1) {
                    listadoProductos.push(boletosPaseCompleto + ' Pases completos');
                }

                if (cantCamisas >= 1) {
                    listadoProductos.push(cantCamisas + ' Camisas');
                }

                if (cantEtiquetas >= 1) {
                    listadoProductos.push(cantEtiquetas + ' Etiquetas');
                }

                lista_productos.style.display = "block";
                lista_productos.innerHTML = '';

                for(var i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + '<br>';
                }
                
                suma.innerHTML = "$ " + totalPagar.toFixed(2);
            }
        }

        function mostrarDias() {
            var boletosDia = parseInt(pase_dia.value, 10) || 0,
                boletosDosDias = parseInt(pase_dos_dias.value, 10) || 0,
                boletosPaseCompleto = parseInt(pase_completo.value, 10) || 0;

                var diasElegidos = [];

                if (boletosDia > 0) {
                    diasElegidos.push('viernes');
                }

                if (boletosDosDias) {
                    diasElegidos.push('viernes', 'sabado');
                }

                if (boletosPaseCompleto) {
                    diasElegidos.push('viernes', 'sabado', 'domingo');
                }

                for(var i = 0; i < diasElegidos.length; i++) {
                    document.getElementById(diasElegidos[i]).style.display = 'block';
                }
        }

        } // IF calcular

    }); // DOM CONTENT LOADED

    // Mapa
    var map = L.map('mapa').setView([-34.60665, -58.435421], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-34.60665, -58.435421]).addTo(map)
        .bindPopup('GDLWebCamp 2020 <br> Boletos ya disponibles')
        .openPopup();
})();

$(function(){
    // Programa de Conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    // Animaciones para los Números
    $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1500);
    $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 1500);

    // Cuenta Regresiva
    $('.cuenta-regresiva').countdown('2020/12/03 24:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    // Lettering
    $('.nombre-sitio').lettering();

    // Menu fijo
    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > windowHeight){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura+'px'});
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
    });

    // Menu Responsive
    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle();
    });
});