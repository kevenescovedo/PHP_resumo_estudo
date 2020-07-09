<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 7.3;
    $num2 = -4.3;
    $num3 =  6.7;
    
    echo $num."</br>";
    echo $num2."</br>";
    echo $num3."</br>";


    // ceil arredonda o valor para cima
    echo "<h1 style='color: blue;'>ceil</h1> </br>";
    echo ceil($num)."</br>";
    echo ceil($num2)."</br>";
    //floor arredonda o valor para baixo
    echo "<h1 style='color: blue;'>floor</h1> </br>";
    echo floor($num)."</br>";
    echo  floor($num2)."</br>";
    // round aarredonda o valor com base na casa decimal se o valor tiver um casa depois da virgula entre 0.4 ele arrendonda para baixo entre 5.9 ele arredonda para cima;
    echo "<h1 style='color: blue;'>round</h1> </br>";
    echo floor($num)."</br>";
    echo  floor($num2)."</br>";

    echo  floor($num3)."</br>";
    // rand gera um número aleatorio de 0 até randmax; parametros rand(inicio,final);
    echo "<h1 style='color: blue;'>rand número randomico</h1> </br>";
    
    echo rand()."</br>";
    
    echo rand(10,20)."</br>";
    echo getrandmax()."</br>";
    
    // sqrt retorna a raiz quadrada
    $raiz = 4;
    echo "raiz de ".$raiz."</br>";
    echo "essa é a raiz: ".sqrt($raiz);

     ?>
</body>
</html>