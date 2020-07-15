<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     // for(variavel, condicao de parada, incrimento) {

   //  }
   for($x = 1; $x <= 10; $x++) {
    echo "$x </br>";
   }
   echo "<h1>BREAK</h1>";
    
    for($num = 1; true;  $num++) {
        echo "$num </br>";
        if($num >= 100) {
        break;
        }
    }
    echo "<h1>Continue</h1>";
    for ($y = 1; $y <= 100; $y++) {
        if($y % 2 == 0) {
            continue;
        }
        echo $y."</br>";
    }
     ?>
</body>
</html>