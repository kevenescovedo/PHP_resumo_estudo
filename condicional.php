<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ativo = true;
    $number = 4;
    if ($ativo) {
        echo "true";
    }
    else {
        
        echo "false";
    }
    if(5 < $number  && $number >= 3) {
        echo "</br>";
        echo "true 1";
    }
    else if(0 > $number || $number == 1) {
        echo "</br>";
        echo "true 2";
    }
    else {
        echo "</br>";
        echo "true 3";
    }
    if (5 == 5 XOR 7 == 4) {
        echo "</br>";
        echo "true xor";
    }
    else {
        echo "</br>";
       echo  "false xor";
    }
    //operador ternario
    $aprovado = true;
    $status = $aprovado ? "aprovado" : "reprovado";
    $cor = null;
    $cor_recebido = $cor ?? "azul";
    echo "</br>";
    echo $status;
    echo "</br>";
    echo $cor_recebido;
    

     ?>
</body>
</html>