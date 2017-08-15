<?php
$Datos=array('N' => 5,
             'P' => 13,1416,
                      );
$R=pow($Datos["N"],2);
$AREA=$R*$Datos["P"];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
      <h2>Area Del Circulo</h2>
      <br>
      <h2>Numero :<div class="Cont"><?php echo $Datos["N"]?></div></h2>
      <h2>Radio :<div class="Cont"><?php echo $R ?></div></h2>
      <h2>Pi :<div class="Cont"><?php echo $Datos["P"] ?></div></h2>
      <br>
      <h2>El Area Es :<div class="Cont"><?php echo $AREA ?></p></h2>
    </div>
  </body>
</html>
