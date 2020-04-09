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
              $nombre = "Alan";
              $apellido = "Cabot";
            ?>
             
            <h1><?php echo $nombre . ' ' . $apellido; ?></h1>
             
            <?php 
              echo "<h1>{$nombre} {$apellido}</h1>"; 
            ?>    
        </div>
    </div>

  </body>
</html>
