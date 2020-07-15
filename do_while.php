<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //no do while ele exceuta pelo menos uma vez o que está dentro das chaves e a condição e verificado no final
    $x = 1;
    do {
      
      echo $x;
      echo"</br>";
      $x++;
    }
     while($x < 10);
     $n = 10;
     do {
        echo"</br>";
      echo "imprimi so uma vez o $n";
     }while($n < 9);
    ?>
    


</body>
</html>