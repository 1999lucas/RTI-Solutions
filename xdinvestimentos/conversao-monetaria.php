<?php

$real = $_GET["real"];
$moeda = $_GET["moeda"];

$resultadoDolar = ["resultadoDolar"];
$resultadoEuro = ["resultadoEuro"];

$answer = $_GET['moeda'];
if ($answer == "dolar") {
    $resultadoDolar = $real * 5.41;
}else if 
    ($answer == "euro") {
    $resultadoEuro = $real * 6.57;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles-global.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Moedas</title>
</head>

<body>

<h1>Valor total em <?=$answer?>:
<h1><? if ($answer == "euro") {
    echo "€ $resultadoEuro"; 
}else if ($answer == "dolar") {
    echo "US$ $resultadoDolar"
}   ?></h1>

</body>
</html>