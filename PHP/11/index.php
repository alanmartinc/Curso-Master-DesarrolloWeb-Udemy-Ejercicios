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
                
          <?php  
            $tecnologias[] = 'Python';
            $tecnologias[5] = 'Java';
          ?>

          <pre>
            <?php print_r($tecnologias); ?>
          </pre>
            
          <?php // borrar ultimo elemento y traerlo en variable ?>
          <?php $java = array_pop($tecnologias); ?>
          <h1><?php echo $java; ?></h1>
            
          <pre>
            <?php print_r($tecnologias); ?>
          </pre>
              
          <?php // remover primer elemento del array ?>
          <?php unset($tecnologias[0]); ?>
              
          <pre>
            <?php print_r($tecnologias); ?>
          </pre>
              
          <?php // remover primer elemento y agregarlo a variable ?>
          <?php $html = array_shift($tecnologias); ?>
          <h1><?php echo $html; ?></h1>

          <pre>
            <?php print_r($tecnologias); ?>
          </pre>
              
          <?php // remover ciertos elementos y agregar otros ?>
          <?php $array = array_splice($tecnologias, 1,1, array('AngularJS', 'jQuery')); ?>

          <pre>
            <?php print_r($array); ?>
          </pre>

          <pre>
            <?php print_r($tecnologias); ?>
          </pre>
        </div>
    </div>

  </body>
</html>
