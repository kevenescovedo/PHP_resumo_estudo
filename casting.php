<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor = 10;
    $valor2 = (float) $valor;
    $valor3 = (String) $valor;
    $valor4 = 7.77;
    $valor5 = (int) $valor4;
    $valor6 = (string) $valor5;
    $valor7 = "12.34";
    $valor8 = (float) $valor7;
    $valor9 = (float) $valor7;

   $tipo =  gettype($valor);
   $tipo2 = gettype($valor2);
   $tipo3 = gettype($valor3);
   $tipo4 = gettype($valor4);
   $tipo5 = gettype($valor5);
   $tipo6 = gettype($valor6);
   $tipo7 = gettype($valor7);
   $tipo8 = gettype($valor8);
   $tipo9 = gettype($valor9);

   echo $tipo;
   echo "</br>";
   echo $tipo2;
   echo "</br>";
   echo $tipo3;
   echo "</br>";
   echo $tipo4;
   echo "</br>";
   echo $tipo5;
   echo "</br>";
   echo $tipo6;
   echo "</br>";
   echo $tipo7;
   echo "</br>";
   echo $tipo8;
   echo "</br>";
   echo $tipo9;
   
   
   
     ?>
</body>
</html>