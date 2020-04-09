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
          <?php 
            $persona = array(
            'datos' => array(
            'nombre' => 'Alan',
            'pais' => 'Argentina',
            'profesion' => 'Desarrollador Web'
            ),
            'lenguajes' => array(
            'front_end' => array('css', 'html5', 'javascript', 'jquery'),
            'back_end' => array('php', 'mysql', 'python')
            )
            );
          ?>

          <pre>
            <?php print_r($persona['lenguajes']['front_end'][2]); ?>
          </pre>    
        </div>
    </div>

  </body>
</html>
