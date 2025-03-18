<?php

$nome = "Lucas Santos";
$altura = 1.69;
$profissao = "Assistente ADM";
$cidadeNasc = "São Paulo";
$pais = "Brasil";
$anoAtual = 2025;
$anoNasc = 1991;
$idade = $anoAtual - $anoNasc; 
$texto1 = "Meu nome é ". $nome . " tenho " . $idade . " e minha altura é " . $altura . " metros.";
$texto2 = " Trabalho como ". $profissao . ". Nasci em " . $cidadeNasc . "/" . $pais . " em " . $anoNasc . ".";

echo $texto1 . $texto2;
?>