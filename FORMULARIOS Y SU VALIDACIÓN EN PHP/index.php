<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>
        <div class="contenido">
          <form class="" action="respuesta.php" method="post">

            <div class="informacion">
              <div class="campo">
                <label for="nombre">Nombre
                  <input type="text" name="nombre" id="nombre">
                </label>
              </div>

              <div class="campo">
                <label for="apellido">Apellido
                  <input type="text" name="apellido" id="apellido">
                </label>
              </div>

              <!-- Desde un checkbox-->
              <div class="campo">
                <label for="notificaciones">Notificaciones
              <input type="checkbox" name="notificaciones" id="notificaciones">
                </label>
              </div>
            </div> <!--.informacion-->

            <!-- Desde array de Checkboxes-->
            <div class="cursos">
              <h2>Cursos</h2>
              <div class="campo">
                <label for="html5">HTML5
                  <input type="checkbox" name="curso[]" value="html5" id="html5">
                </label>
              </div>

              <div class="campo">
                <label for="css3">CSS3
                  <input type="checkbox" name="curso[]" value="css3" id="css3">
                </label>
              </div>

              <div class="campo">
                <label for="javascript">JavaScipt
                  <input type="checkbox" name="curso[]" value="javascript" id="javascript">
                </label>
              </div>
            </div>

            <div class="especializacion">
              <h2>Área de Especialización</h2>
              <select name="area" value="-Any-">
                <option>- Selecciona una area -</option>
                <option value="fe">Front End</option>
                <option value="be">Back End</option>
                <option value="fs">Full Stack</option>
              </select>
            </div>

            <div class="tipo_curso">
              <h2>Tipo de Curso</h2>
              <?php  $opciones = array(
                'pres' => 'Presencial',
                'online' => 'En Línea'
              );?>

              <?php foreach($opciones as $key => $opcion) {
                echo "<div class='campo'>";
                echo "<input type='radio' name='opciones' value='$key' > $opcion";
                echo "</div>";
              } ?>
            </div>

            <div class="textarea">
              <div class="campo">
                <label for="mensaje"> Mensaje <br/>
                  <textarea name="mensaje" rows="8" cols="40" id="mensaje"></textarea>
                </label>
                <input type="submit">
              </div>
            </div>

          </form>
        </div>
    </div>

  </body>
</html>
