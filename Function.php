<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     function exibirBoasvindas()
    {
        echo "eae beleza";
    };
    exibirBoasvindas();
    function areaTerreno($largura, $cumprimento) {
       return $largura * $cumprimento;
    }
   $largura = 10.0;
   $cumprimento = 10;
   $areaterreno = areaTerreno($largura, $cumprimento);
   echo "</br>";
   echo $areaterreno ;
     ?>
</body>
</html>