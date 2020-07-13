<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $array = [1,2,3,4,5,6];

      echo "<h1>Array</h1>";
      echo "</br>";
     print_r($array);
     echo "</br>";
      
    //is_array($array) //verifica se isso é um array; retorna true ou false
    if(is_array($array)) {
        print("é um array");
    }
    else {
        echo "não é um array";
    }
    print("</br>");
    
    //array_keys($array); mostra todas as chaves do array;
    print_r(array_keys($array));
    print("</br>");
    //sort($array); -> ordena seu array e reajusta seus indices a ordenação e feita sobre o array original; retorna true ou false;

    $componentes = array("teclado",'mouse','placa de video','hd', 'cabo admi');
    echo "<pre>";
    print_r($componentes);
    echo "</pre>";
    sort($componentes);
    echo "<pre>";
    print_r($componentes);
    echo "</pre>";
  
    //asort ordena o array mais preservas os indices a ordenação sobre o array original true ou false;
    
    $aplicativos = array("webehero","tackflow",'app covid 19',);
    echo "<pre>";
    print_r($aplicativos);
    echo "</pre>";
    asort($aplicativos);
    echo "<pre>";
    print_r($aplicativos);
    echo "</pre>";
    //count($array); conta os elementos dentro do array
    echo count($array);
   // array_merge(array) funde um ou mais array rretorna um novo array com os arrays passsados
   $sistemas1 = ["osx","windows"];
   $sistemas2 = array("linux");
   $sistemas3 = array("solaris");
  $juncao_sistemas = array_merge($sistemas1,$sistemas2,$sistemas3);
  echo "<pre>";
  print_r($juncao_sistemas);
  echo "</pre>";
 



   //explode(aaray) divide uma string com base  em um delimitador QUEBRAR STRING;
   
   print("</br>");
   $string = "13/07/2020";

   explode("-",$string);

   $novo_array =  explode("/",$string);
   echo($string);
   print("</br>");
   echo "<pre>";
   print_r($novo_array);

   echo "</pre>";
   //agora posso concaentar
   echo $novo_array[2]."-".$novo_array[1]."-".$novo_array[0];
   //implode(array) junta o elementos do array em uma string utilizando o delimitador para concatenar;
   $letras = ["a","b","x","y"];
   $nova_string = implode(",",$letras);
   print("</br>");
   echo $nova_string;




    
    ?>
</body>
</html>