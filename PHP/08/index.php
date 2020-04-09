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
            $lenguaje = "MySQL";
                
            switch($lenguaje) {
              case 'PHP':
                echo "Backend";
                break;

              case 'JavaScript':
                echo "FrontEnd y Backend (NodeJS)";
                break;

              case 'HTML5':
                echo "Front End";
                break;

              default:
                echo "no valido";
                break;      
            }
          ?>  
        </div>
    </div>

  </body>
</html>
