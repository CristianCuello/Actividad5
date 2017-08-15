<?php
$AB=array('A' => 7,
          'B' => 8,);
$AREA=($AB["A"]*$AB["B"])/2;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
   <div class="Container">
     <h2>Area De Un Triangulo</h2>
     <br>
      <h2>A :<div class="Cont"><?php echo $AB["A"]; ?></div></h2>
      <h2>B :<div class="Cont"><?php echo $AB["B"]; ?></div></h2>
      <br>
      <h2>El Area Es :<div class="Cont"><?php echo $AREA; ?></div></h2>
   </div>
  </body>
</html>
