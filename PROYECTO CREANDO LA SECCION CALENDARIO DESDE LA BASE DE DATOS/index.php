<!-- llama al archivo header.php -->
<?php include_once 'includes/templates/header.php'; ?>
 
  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero vel sapiente cum expedita veritatis porro, nihil sequi illo eum ad est, autem aperiam eius culpa impedit distinctio error! Excepturi, possimus!</p>
  </section> <!--.seccion-->

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogg">
      </video>
    </div> <!--.contenedor-video-->
    
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i> Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i> Conferencias</a>
            <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i> Seminarios</a>
          </nav>

          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y JavaScript</h3>
              <p><i class="far fa-clock" aria-hidden="true"></i> 16:00 hrs</p>
              <p><i class="far fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="far fa-user" aria-hidden="true"></i> Juan Pablo De La Torre Valdez</p>
            </div>

            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="far fa-clock" aria-hidden="true"></i> 20:00 hrs</p>
              <p><i class="far fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="far fa-user" aria-hidden="true"></i> Juan Pablo De La Torre Valdez</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div> <!--#talleres .info-cursos-->

          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser FreeLancer</h3>
              <p><i class="far fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
              <p><i class="far fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="far fa-user" aria-hidden="true"></i> Gregorio Sanchéz</p>
            </div>

            <div class="detalle-evento">
              <h3>Tecnologías del Futuro</h3>
              <p><i class="far fa-clock" aria-hidden="true"></i> 17:00 hrs</p>
              <p><i class="far fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="far fa-user" aria-hidden="true"></i> Susana Sanchéz</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div> <!--#conferencias .info-cursos-->

          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Diseño UI/UX para Móviles</h3>
              <p><i class="far fa-clock" aria-hidden="true"></i> 17:00 hrs</p>
              <p><i class="far fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
              <p><i class="far fa-user" aria-hidden="true"></i> Harold Garcia</p>
            </div>

            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="far fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
              <p><i class="far fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
              <p><i class="far fa-user" aria-hidden="true"></i> Susana Rivera</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div> <!--#seminarios .info-cursos-->

        </div> <!--.programa-evento-->
      </div> <!--.contenedor-->
    </div> <!--.contenido-programa-->
  </section> <!--.programa-->

  <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="imagen invitado 1">
          <p>Rafael Bautista</p>
        </div> <!--.invitado-->
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="imagen invitado 2">
          <p>Shari Herrera</p>
        </div> <!--.invitado-->
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="imagen invitado 3">
          <p>Gregorio Sanchez</p>
        </div> <!--.invitado-->
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="imagen invitado 4">
          <p>Susana Rivera</p>
        </div> <!--.invitado-->
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="imagen invitado 5">
          <p>Harold Garcia</p>
        </div> <!--.invitado-->
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="imagen invitado 6">
          <p>Susan Sanchez</p>
        </div> <!--.invitado-->
      </li>

    </ul> <!--lista-invitados-->
  </section> <!--.invitados-->

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p> Invitados</li>
        <li><p class="numero"></p> Talleres</li>
        <li><p class="numero"></p> Días</li>
        <li><p class="numero"></p> Conferencias</li>
      </ul> <!--.resumen-evento-->
    </div> <!--.contenedor-->
  </div> <!--.contador parallax-->

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por día</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div> <!--.tabla-precio-->
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los días</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div> <!--.tabla-precio-->
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div> <!--.tabla-precio-->
        </li>
      </ul> <!--.lista-precios-->
    </div> <!--.contenedor-->
  </section> <!--.precios seccion-->

  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis eum ut consectetur tempora mollitia libero. Corrupti eum, iste explicabo, officiis qui illo saepe officia expedita, animi harum minima assumenda beatae!</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Osvaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
          </footer> <!--.info-testimonial-->
        </blockquote>
      </div> <!--.testimonial-->

      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis eum ut consectetur tempora mollitia libero. Corrupti eum, iste explicabo, officiis qui illo saepe officia expedita, animi harum minima assumenda beatae!</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Osvaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
          </footer> <!--.info-testimonial-->
        </blockquote>
      </div> <!--.testimonial-->

      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis eum ut consectetur tempora mollitia libero. Corrupti eum, iste explicabo, officiis qui illo saepe officia expedita, animi harum minima assumenda beatae!</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Osvaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
          </footer> <!--.info-testimonial-->
        </blockquote>
      </div> <!--.testimonial-->
    </div> <!--.testimoniales .contenedor . clearfix-->
  </section> <!--.seccion-->

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Regístrate al newsletter</p>
      <h3>GdlWebCamp</h3>
      <a href="#" class="button transparente">Registro</a>
    </div> <!--.contenido .contenedor-->
  </div> <!--.newsletter .parallax-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p>Días</li>
        <li><p id="horas" class="numero"></p>Horas</li>
        <li><p id="minutos" class="numero"></p>Minutos</li>
        <li><p id="segundos" class="numero"></p>Segundos</li>
      </ul> <!--clearfix-->
    </div> <!--.cuenta-regresiva .contenedor-->
  </section> <!--.seccion-->

<!-- llama al archivo footer.php -->
<?php include_once 'includes/templates/footer.php'; ?>