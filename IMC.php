<?php
    echo "Calculadora de IMC\n";
    echo "Digite seu peso: ";
    $peso = (float) readline();
    
    echo "Digite sua altura: ";
    $altura = (float) readline();
    
    $imc = $peso / ($altura * $altura);
    
    echo "O seu IMC é:  " , $imc;
?>