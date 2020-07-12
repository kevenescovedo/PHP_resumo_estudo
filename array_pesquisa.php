<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $array = ["morango","maracuja","mamão","banana","mamonas"];
       echo "<pre>";
       print_r($array);
       echo "</pre>";
       //in_array(o que procura, onde procura) retorna true ou false para existência do que está sendo procurado;
       //array_search(); retorna o indice do item procurado caso ele exista;
       $procurado = "mamão";
     $existe = in_array($procurado, $array);
     echo (string) $existe."</br>";
    
     // não existe maça no array;
     echo gettype($existe)."</br>";
     
      if( (int) $existe == 1) {
          echo $procurado." existe no array";
          echo "</br>";
      }
      else {
          echo $procurado."não existe no array"."</br>";
      }
     $procurado = "maçã";
     $existe = in_array($procurado, $array);
     
     if( (int) $existe == 1) {
        print($procurado." existe no array");
        echo "</br>";
    }
    else {
        echo $procurado." não existe no array"."</br>";
    }

      $fruta = "amora";
   $indice =  array_search($fruta,$array);
   echo $indice ? $fruta."existe está na posição".$indice." no array." : $fruta." não existe";
  $lista_coisas = [];
  $lista_coisas["frutas"] = $array;
  $lista_coisas["pessoas"] = ['keven',"anselmo","thiago","angela"];
  echo "<pre>";
  print_r($lista_coisas);
  echo "</pre>";
  echo '</br>';
  $existe =  in_array("mamonas", $lista_coisas['frutas']);
  if($existe) {
      print("o valor existe </br>");
  }
  else {
      print("o valor não existe");
  }

 
    ?>
</body>
</html>