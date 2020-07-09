<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $texto = "curso Completo de PHP";
    //string to lower convertido minusculo;
    echo strtolower($texto);
    echo "</br>";
    //string to upper letra maiscula;
    echo strtoupper($texto);
    //uper case first primeira letra maiscula
    echo "</br>";
    echo ucfirst($texto)."</br>";
    // lenght verficar quantos caracteres tem uma string;
    echo strlen($texto)."</br>";
    // subisitituiar uma cadeia de caracteres por outra str_replace(<procurar por>,<subistituir por>,variavel);
  echo  str_replace("curso Completo","Vídeo Aula",$texto);
   // retorna uma parte da string;subtr(string,pisicao inicial, qauntidade de caracteres -1);

    echo "</br>";
  echo  substr($texto,0,5)."...";
    ?>
</body>
</html>