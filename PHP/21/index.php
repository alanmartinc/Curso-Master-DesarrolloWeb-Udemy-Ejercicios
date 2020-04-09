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
          <h2>Agenda Teléfonica</h2>
            <?php 
              function usuario($nombre, $tel) {
                  return $contacto = $nombre . " " . $tel;
              }
              
              $usuario = usuario('Alan Cabot', '1234-1234');
              echo $usuario;
            ?>  
        </div>
    </div>

  </body>
</html>
