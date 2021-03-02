<?php

include("../funcoes.php");

$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$consumo = $_GET["consumo"];

$total = calculoLuz($consumo);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../styles-global.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo da Conta de Luz</title>
</head>

<body>
    
    
    <h1>Conta de Luz de: <?= $nome ?></h1>
    <h1><?= $endereco ?></h1>
    <h1>Consumo: <?php
    if ($consumo > 120) {
        echo "<h1 style='color: red'><em> $consumo KW/h</em></h1>";
    } else {
        echo "<h1 style='color: blue'><em> $consumo KW/h</em></h1>";
        
    }
    ?></h1>
    <h1>Valor a Pagar: R$ <?= number_format($total, 2, ",", "." )?> </h1>
    
    <?php if ($consumo <= 120) {
         echo "<h1>Obrigado por Economizar!</h1>";
    }
    ?>
 

</body>

</html>