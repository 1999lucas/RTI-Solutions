<?php

$nome = $_GET["nome"];
$salario = $_GET["salario"];
$aumentoSalario = ["aumento"];
$juros = ["juros"];


if ($salario > 5000) {
    $juros = $salario * 0.1;
    $aumentoSalario = $salario + $juros;


}else if($salario < 5000) {
    $juros = $salario * 0.2;
    $aumentoSalario = $salario + $juros;
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../styles-global.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Frete PHL</title>
</head>

<body>
<h1>O(a) funcionário(a) <?= $nome ?> passará a receber R$ <?= number_format($aumentoSalario, 2, ",", ".") ?></h1>
</body>


