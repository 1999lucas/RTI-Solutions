<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];
$numero4 = $_POST["numero4"];
$numero5 = $_POST["numero5"];


foreach($_POST as $value) {
    $soma = array_sum ($_POST);
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
<h1>Valor total da soma: <?=$soma?>
  </body>
</html>