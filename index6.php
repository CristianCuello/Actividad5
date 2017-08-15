<?php
$Datos= array('H' =>24 ,
              'V' =>6 ,
                     );
$M=$Datos["H"]*$Datos["V"];
$S=$M*$Datos["V"];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
     <h2>Una Hora a Minutos y Segundos</h2>
     <br>
     <h2>Horas : <div class="Cont"><?php echo $Datos["H"] ?></div></h2>
     <br>
     <h2>Minutos : <div class="Cont"><?php echo $M ?></div></h2>
     <h2>Segundos : <div class="Cont"><?php echo $S ?></div></h2>
    </div>
  </body>
</html>
