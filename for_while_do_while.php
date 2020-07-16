<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $registros = array(array( "titulo" =>"Corinthins Vence Palmeiras, Luan marca 2 Vezes", "conteudo"=>"corinthains vence palmeiras com 2 gols de luan...."),
       array('titulo' => "Titulo 2", "conteudo"=> "conteudo titulo 2..."),
       array('titulo' => "Titulo 3", "conteudo"=> "conteudo titulo 3..."),
       array('titulo' => "Titulo 4", "conteudo"=> "conteudo titulo 4..."),
       array('titulo' => "Titulo 5", "conteudo"=> "conteudo titulo 5..."),
       array('titulo' => "Titulo 6", "conteudo"=> "conteudo titulo 6..."),
       array('titulo' => "Titulo 7", "conteudo"=> "conteudo titulo 7..."),


);
print_r($registros);
echo "<hr />";
   $idx = 0;
   echo "<h1>While com array</h1>";
    while($idx < count($registros)) {
     echo "<h2>".$registros[$idx]["titulo"]."</h2>";
     echo "<p>".$registros[$idx]["conteudo"]."</p>";

     

        $idx++;
    }
    echo "<h1> Do while</h1>";
    $idx = 0;
    do {
      
    
         echo "<h2>".$registros[$idx]["titulo"]."</h2>";
         echo "<p>".$registros[$idx]["conteudo"]."</p>";
    
         
    
            $idx++;
    }while($idx < count($registros));
    echo "<h1>For</h1>";
    for($idx = 0; $idx < count($registros); $idx++) {
        echo "<h2>".$registros[$idx]["titulo"]."</h2>";
        echo "<p>".$registros[$idx]["conteudo"]."</p>";
    }
     ?>
</body>
</html>