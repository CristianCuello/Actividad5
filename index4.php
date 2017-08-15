<?php
$Datos= array('MI' =>9.6,
              'MM' =>1.609,
                           );
$KI=$Datos["MI"]*$Datos["MM"];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
      <h2>Millas a Kilometros</h2>
      <br>
      <h2>Millas : <div class="Cont"><?php echo $Datos["MI"] ?></div></h2>
      <h2>Metros de Millas : <div class="Cont"><?php echo $Datos["MM"] ?></div></h2>
      <br>
      <h2>Convertido a Kilometros : <div class="Cont"><?php echo $KI ?></div></h2>
    </div>

  </body>
</html>
