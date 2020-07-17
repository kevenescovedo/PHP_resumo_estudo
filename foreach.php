<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // com foreach foreach($array as $variavel que vai receber o valor)
    $funcionarios = array("João","Veronica",'Leandro',"John","Marcus");
    print_r($funcionarios);
    echo "</br>";
    foreach($funcionarios as $nome_funcionarios) {
        echo "$nome_funcionarios";
        echo "</br>";
    }
    $funcionarios = array("joão","Veronica",'leandro',"John","Marcus");
     // vc pode passar foreach($array as $ $receeber o indice => receber valor do array)
       foreach($funcionarios as $nome) {
       
    
        echo " $nome ";
       
        if($nome == "Marcus" ) {
            echo "sera promovido";
        }
        echo "</br>";
       }
    ?>
</body>
</html>