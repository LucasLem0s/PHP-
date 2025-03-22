<?php
    echo "Calcular viagem\n";
    echo "Digite os quilometros rodados na viagem? ";
    $quilometro = (float) readline();
    
    echo "Qual o consumo do seu carro? ";
    $consumo = (float) readline();
     
    echo "Quanto pagou no litro de combustivel? ";
    $combustivel = (float) readline();
    
   
    $conta = ($quilometro/$consumo)*$combustivel;
    
    echo "O valor é:  " , "R$" , number_format($conta, 2 ), " centavos";
?>