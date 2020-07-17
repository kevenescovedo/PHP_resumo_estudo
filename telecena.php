<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $array = [];
     $num;
  
     for ($i = 0; $i < 6; $i++) {

        $num = rand(1,60);
      if ($i == 0)
       {
         
       $array[$i] =  $num;
      }
      else {
          if(!in_array($num,$array)) {
            $num = rand(1,60);
            $array[$i] =  $num;
          }
      }
     }
     echo "<h1>Resultado da telecena</h1>";
     echo "<pre>";
     print_r($array);
     echo "</pre>";
    
    ?>
</body>
</html>