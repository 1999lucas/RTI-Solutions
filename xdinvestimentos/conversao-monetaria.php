<?php

$real = $_GET["real"];
$moeda = $_GET["moeda"];

$answer = $_GET['moeda'];
if ($answer == "Dólar") {
    $resultadoDolar = $real * 5.41;
}else if 
    ($answer == "Euro") {
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
<h1><?php if ($answer == "Euro") { 
    echo "€ " .number_format("$resultadoEuro", 2, ",", "." );
}else if ($answer == "Dólar") {
    echo "US$ " .number_format("$resultadoDolar", 2, ",", ".");
}   ?>

</body>
</html>