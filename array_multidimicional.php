<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $array = [];
      $array["frutas"] = array("mamão","maracuja","melão");
      $array["salada"] = array("alface", "couve","repolho");
      $array["frutas"][] = "mamonas";
      print_r($array);
    
    ?>
</body>
</html>