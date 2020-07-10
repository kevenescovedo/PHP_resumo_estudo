<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //pegar data atual;
    // pegar o número da do dia da data;
     echo date("d")."</br>";
      // representação textual do dia em três letras
     echo date("D")."</br>";
     // dia/mes/ano horas:minutos
    echo date("d/m/Y H:i")."</br>";
    // saber o timezone da aplicação
    echo date_default_timezone_get()."</br>";
    // setar o timezone da aplicação;
     date_default_timezone_set("America/Sao_Paulo");
    echo date_default_timezone_get();
    echo "</br>";
    echo date("d/m/Y H:i")."</br>";
    //calculo de datas, para calcular datas elas devem estar em formato amaericano;
    $data_inicial = "2020-07-10";
    $data_final = "2020-12-31";
    //converter para timesatamp strtotime() vai calcular a diferença de segundos entre 01/01/1970 a 10/07/2020;
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    
    echo $data_inicial."-". $time_inicial;
    echo "</br>";
    echo $data_final."-". $time_final;
                       //colocar o valor absoluto;
    $diferencas_time =  abs($time_final - $time_inicial);
    echo "</br>";
    echo $diferencas_time;
    echo "</br>";
    echo "A diferença de segundos entre a data inicial e final é $diferencas_time";
    //1 dia tem 86400 segundos pois 24 x 60 x 60 = 86400
    // x  tem 15030000;

    $_quantidade_de_dias = $diferencas_time/ 86400;
    echo "</br>";
   echo "a quantidades de dias para a data final: ". round($_quantidade_de_dias);





    

     ?>
</body>
</html>
