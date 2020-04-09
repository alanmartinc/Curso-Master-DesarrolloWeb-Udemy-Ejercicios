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
          <h2>Descripción Producto</h2>     
            <p>ID: <?php echo htmlspecialchars($_GET['id']); ?></p>
            <p>Nombre: <?php echo htmlspecialchars($_GET['nombre']); ?>      
        </div>
    </div>

  </body>
</html>
