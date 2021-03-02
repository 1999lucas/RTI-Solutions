<?php

function calcularFrete($pedagios, $distancia){
    $custoPedagio = $pedagios * 9.4;
    $custoDistancia = $distancia * 6;

    return $custoPedagio + $custoDistancia;
  }

function aumentoSalario($salario) {
    if ($salario > 5000) {
        $juros = $salario * 0.1;

        $aumentoSalario = $salario + $juros;
        return $aumentoSalario;
    
    }else if($salario < 5000) {
        $juros = $salario * 0.2;
        $aumentoSalario = $salario + $juros;  
  }
return $aumentoSalario;
}


function calculoLuz($consumo) {
    if($consumo >120) {
        $total = $consumo * 0.42;
    }else if($consumo <=120) {
        $total = $consumo * 0.32;
    } 
    return $total;
  }

function conversaoMonetaria($real) {
    $answer = $_GET['moeda'];
    if ($answer == "Dólar") {
        $resultadoDolar = $real * 5.41;
        return $resultadoDolar;
    }else if 
        ($answer == "Euro") {
        $resultadoEuro = $real * 6.57;
        return $resultadoEuro;
        }
        return $resultadoDolar;
        return $resultadoEuro;
}

function Desafio ($soma) {
    foreach($_POST as $value) {
        return  array_sum ($_POST);
    }
}

?>
)