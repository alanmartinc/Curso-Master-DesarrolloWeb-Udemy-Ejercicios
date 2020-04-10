<?php
   $id = $_GET['id'];
   
  try {
    require_once('funciones/bd_conexion.php');
    $sql = "SELECT * FROM contactos WHERE `id` = {$id}"; 
    $resultado = $conn->query($sql);
  } catch (Exception $e) {
      $error = $e->getMessage();
    } 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agenda PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Agenda de Contactos</h1>
        <div class="contenido">
          <h2>EDITAR Contacto</h2>
            <form action="actualizar.php" method="get">
              <?php while($registros = $resultado->fetch_assoc() ) { ?>

                <div class="campo">
                  <label for="nombre">Nombre
                    <input type="text" name="nombre" id="nombre" value="<?php echo $registros['nombre']; ?>">
                  </label>
                </div>

                <div class="campo">
                  <label for="numero">Teléfono
                    <input type="text" name="numero" id="numero" value="<?php echo $registros['numero']; ?>">
                  </label>      
                </div>

                <input type="hidden" name="id" value="<?php echo $registros['id']; ?>">
                <input type="submit" value="Actualizar"> 
              <?php } ?>
            </form>   
        </div>
    </div>

  <?php 
    $conn->close();
  ?>

  </body>
</html>
