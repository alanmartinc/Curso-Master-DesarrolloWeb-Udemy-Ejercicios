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
            echo "10+20: " . (10+20);
          ?>

          <hr>

          <?php
            $numero1 = 10;
            $numero2 = 20;
            $numero3 = 30;
            $numero4 = 40;
                
            // suma
            echo $numero1 + $numero2;        
            
            echo "<hr>";
                    
            // resta 
            echo $numero4 - $numero3;
                    
            echo "<hr>";

            // multiplicacion 
            echo $numero1 * $numero2;
                    
            echo "<hr>";

            // division 
            echo $numero4 / $numero1;
                            
            echo "<hr>";

            // parentesis 
            echo ($numero1 + $numero2) * ($numero1 * .16);
                    
            echo "<hr>";

            // incremento por 1
            $numero1++;
            echo $numero1;
                    
            echo "<hr>";

            // decremento por 1
            $numero1--;
            echo $numero1;
                    
            echo "<hr>";
                    
            // incremento en la misma variable.
            $total = 0;
            $total += 10;
            $total += 20;
            $total += 10;    
            echo $total;
                    
            echo "<hr>";
                    
            $total = 100;
            $total -= 10;
            $total -= 20;
            $total -= 10;
            echo $total;
                    
            echo "<hr>";
                    
            echo 20 % 3;
          ?>    
        </div>
    </div>

  </body>
</html>
