<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    //string
    $nome = "keven escovedo";
    // int
    $idade = 19;
    //float
    $altura  = 1.82;
    // 1 == true  vazio == false
    $fumante = true; 
    ?>
    <p> Nome da Pessoa : <?= $nome ?> </p>
    <p> Idade da Pessoa : <?=$idade ?> </p>
    
    <p> Altura da Pessoa : <?=$altura ?> </p>
    <p> Fumante: <?=$fumante ?> </p>

</body>
</html>