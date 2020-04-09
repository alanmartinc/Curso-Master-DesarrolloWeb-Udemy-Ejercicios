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
            // versiones anteriores
            $tecnologias = ['CSS', 'HTML', 'JavaScript', 'jQuery'];
          ?>
                
          <pre>
            <?php print_r($tecnologias); ?>
          </pre>

          <?php echo $tecnologias[2]; ?>
          
          <?php
          $lenguajes = array('CSS', 'jQuery', 'PHP', 'MySQL', 20);
          echo $lenguajes[3];
          ?>
                  
          <pre>
            <?php var_dump($lenguajes); ?>
          </pre>      
        </div>
    </div>

  </body>
</html>
