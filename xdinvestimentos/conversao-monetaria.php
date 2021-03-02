<?php

include("../funcoes.php");

$answer = $_GET["moeda"];
$real = $_GET["real"];
$moeda = $_GET["moeda"];

$resultadoDolar  = conversaoMonetaria($real);
$resultadoEuro  = conversaoMonetaria($real);
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