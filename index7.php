<?php
$Datos[]="16";
$Datos[]=sqrt($Datos[0]);
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
      <h2>Raiz Cuadrada</h2>
      <br>
      <h2>Numero : <div class="Cont"><?php echo $Datos[0] ?></div></h2>
      <br>
      <h2>Raiz Cuadrada es : <div class="Cont"><?php echo $Datos[1] ?></div></h2>
    </div>
  </body>
</html>
