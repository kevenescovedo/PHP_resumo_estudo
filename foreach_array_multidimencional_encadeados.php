<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $funcionarios = array("Jhon","Mary","Marcus",'Fred');
     foreach( $funcionarios as $idx => $nomes) {
         echo $nomes." está no indice ".$idx;
         echo "</br>";
     }
     echo "///////////////////////////////////////////////////////";
     echo "</br>";
     $funcionarios = array(
       array('nome' => "John" , "salario" => 2500),
       array('nome' => "Mary" , "salario" => 5500),
       array('nome' => "Mary" , "salario" => 15000),
       array('nome' => "Mary" , "salario" => 3500),
     );
      echo '<pre>';
      print_r($funcionarios);
      echo "</pre>";
       
     foreach ($funcionarios as $idx => $funcionario) {
     echo "</br>";
     echo "<pre>";
     print_r($funcionario);
     echo "</pre>";
     echo "</br>";
      foreach ($funcionario as $idx2 => $valor) {
          echo $idx2."->".$valor;
      }
    

     }
    
    ?>
</body>
</html>