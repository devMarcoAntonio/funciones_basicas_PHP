<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string = "texto da string";
    $numeros = "45";
    $array = array("texto", "da", "array");
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y H:i:s');
    ?>
    <h4>
        implmentação de strings no php:
        <?php echo $string; ?>
    </h4>
    <h4>
        implmentação de numeros no php:
        <?php echo $numeros; ?>
    </h4>
    <h4>
        implmentação de arrays no php:
        <?php echo $array[0]; ?>
    </h4>
    <h4>
        implmentação de data no php:
        <?php echo $data; ?>
    </h4>     
</body>
</html>