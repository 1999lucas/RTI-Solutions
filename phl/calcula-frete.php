<?php

  include("../funcoes.php");

  if(!isset($_GET["origem"]) 
      || !isset($_GET["destino"]) 
      || !isset($_GET["distancia"]) 
      || !isset($_GET["pedagios"])){

        //redirecionar o usuário para a tela index.php
        header("location: index.php");
  }

  $origem = $_GET["origem"];
  $destino = $_GET["destino"];
  $distancia = $_GET["distancia"];
  $pedagios = $_GET["pedagios"];

  $custoTotal = calcularFrete($pedagios, $distancia);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Calculo de Frete PHL</title>
</head>
<body>
  <!-- Se o valor do pedágio for maior que 100, exibir em vermelho -->
  <?php
    // if($custoPedagio > 100){
    //   echo "<h1 style='color: red'>Valor dos pedágios: R$ <em> $custoPedagio </em></h1>";
    // }else{
    //   echo "<h1>Valor dos pedágios: R$ <em> $custoPedagio </em></h1>";
    // }
  ?>
  <h1>A viagem de <?= $origem ?> à <?= $destino ?> irá custar o valor total de R$ 
  <em> <?= number_format($custoTotal, 2, ",", ".") ?> </em></h1>
</body>
</html>