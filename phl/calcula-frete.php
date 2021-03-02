<?php

if (
    !isset($_GET["origem"]) ||
    !isset($_GET["destino"])  ||
    !isset($_GET["distancia"])  ||
    !isset($_GET["pedagios"])
) {

    //redirecionar o usuário para a tela index.php
    header("location: index.php");
}

$origem = $_GET["origem"];
$destino = $_GET["destino"];
$distancia = $_GET["distancia"];
$pedagios = $_GET["pedagios"];

$custoPedagios = $pedagios * 9.4;
$custoDistancia = $distancia * 6;

$custoTotal = $custoPedagios + $custoDistancia;
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
    <!-- Se o valor do pedágios for maior que 100, exibir em vermelho -->
    <?php
    if ($custoPedagios > 100) {
        echo "<h1  style='color: red'>Valor dos pedágios: R$ <em $custoPedagios </em></h1>";
    } else {
        echo "<h1> Valor dos pedágios: R$ <em> $custoPedagios </em></h1>";
        
    }
    ?>
    <h1>A Viagem de <?= $origem ?> à <?= $destino ?> irá custar o valor total de R$<em><?= number_format($custoTotal, 2, ",", ".") ?></em></h1>
</body>

</html>