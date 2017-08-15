<?php
$Datos=array('Entero1' =>10,
             'Entero2' =>22,
                             );
$SUMA=$Datos['Entero1']+$Datos['Entero2'];
$RESTA=$Datos['Entero1']-$Datos['Entero2'];
$MULTI=$Datos['Entero1']*$Datos['Entero2'];
$DIVI=$Datos['Entero1']/$Datos['Entero2'];
$MODULO=$Datos['Entero1']%$Datos['Entero2'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
   <h2>Suma , Resta , Multiplicacion , Divicion , Modulo</h2>
   <br>
   <h2>Numero 1 : <div class="Cont"><?php echo $Datos['Entero1'] ?></div></h2>
   <h2>Numero 2 : <div class="Cont"><?php echo $Datos['Entero2'] ?></div></h2>
   <br>
   <h2>Suma=<div class="Cont"><?php echo $SUMA ?></div></h2>
   <h2>Resta=<div class="Cont"><?php echo $RESTA ?></div></h2>
   <h2>Multiplicacion=<div class="Cont"><?php echo $MULTI ?></div></h2>
   <h2>Divicion=<div class="Cont"><?php echo $DIVI ?></div></h2>
   <h2>Modulo=<div class="Cont"><?php echo $MODULO ?></div></h2>

    </div>

  </body>
</html>
