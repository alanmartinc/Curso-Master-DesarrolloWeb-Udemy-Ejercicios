<section class="seccion contenedor">
    <h2>Invitados</h2>

    <?php
        try {
            require_once('includes/funciones/bd_conexion.php');
        $sql = " SELECT * FROM `invitados` ";
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    ?>

        <section class="invitados contenedor seccion">
            <h2>Nuestros Invitados</h2>
            <ul class="lista-invitados clearfix">

        <?php
            while($eventos = $resultado->fetch_assoc()) { ?>
                    <li>
                        <div class="invitado">
                        <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id'];?>">
                            <img src="img/<?php echo $invitados['url_imagen']?>" alt="imagen invitado 1">
                            <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']?></p>
                        </a>
                        </div> <!--.invitado-->
                    </li>

                    <div style="display:none;">
                        <div class="invitado-info" id="invitado <?php echo $invitados['invitado_id'];?>"></div>
                        <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'];?></h2>
                        <img src="img/<?php echo $invitados['url_imagen']?>" alt="imagen invitado 1">
                        <p><?php echo $invitados['descripcion'];?></p>
                    </div>

            <?php } // While de fetch_assoc() ?>

            </ul> <!--lista-invitados-->
        </section> <!--.invitados-->

    <?php
        $conn->close();
    ?>

  </section> <!--.seccion-->