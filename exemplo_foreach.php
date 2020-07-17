<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    $array = array(
        array( array("xxx", "yyyy"), array("yyy", "tttttt" )),
        array( array("xxx", "yyyy"), array("yyy", "tttttt" ))
    

    );
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    echo "</br>";
    foreach($array as $valor) {
        echo "<pre>";
    print_r($valor);
    echo "</pre>";
    echo "</br>";
    foreach($valor as $letras) {
        echo "<pre>";
    print_r($letras);
    echo "</pre>";
    echo "</br>";
    foreach($letras as $a) {
        echo $a."</br>";
    }
    }
    }
   ?>  
</body>
</html>