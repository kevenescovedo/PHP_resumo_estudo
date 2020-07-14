<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // operadores de comporação e logicos
   $num = 1;
     while($num < 50) {
      print($num);
      echo "</br>";
      $num = $num + 5 ;
      //break interompe o laço de  repetição
      
     }
     echo "<h1>Break</h1>";
       while(true) {
           
           echo $num;
           echo "</br>";
           $num += 5;
           
           if($num >= 100) {
           break;
           }
       }
       echo "</br>";
       echo "<h1>continue</h1>";
       $num2 = 1;

       while($num2 < 10) {
     
        $num2++;

         if($num2 == 2 || $num2 == 6) {
             continue;
         }
        
         echo $num2;

         
         echo "</br>";
      
        
                }
    
     ?>

</body>
</html>