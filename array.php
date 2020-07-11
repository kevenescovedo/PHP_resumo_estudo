<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php
    //criando um array
    // arrays squenciais númericos
    $lista_frutas = array("banana","maçã","morango","uva");
    //inserindo itens
    $lista_frutas[] = "mamão";
    //imprimindo valores especificos
    print($lista_frutas[4])."</br>";
    //para debugar o array e imprimir no browse;
    var_dump($lista_frutas);
    echo "</br>";
    print_r($lista_frutas);


    //array associativos definir os indices dos arrays
    $lista_frutas = array("a"=>"banana","b"=>"maçã","c"=>"morango","d"=>"uva");
    $lista_frutas["k"] = "maracuja";
    print("</br>");
    print($lista_frutas["c"])."</br>";
    //para debugar o array e imprimir no browse;
    var_dump($lista_frutas);
    echo "</br>";
    print_r($lista_frutas);


     ?>
</body>
</html>
