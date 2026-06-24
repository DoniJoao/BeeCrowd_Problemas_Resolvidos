<?php
$handle = fopen('php://stdin', 'r');
$nome = trim(fgets($handle));
$salario_fixo = floatval(trim(fgets($handle)));
$vendas = floatval(trim(fgets($handle)));
$salario = $salario_fixo + ($vendas * 0.15);

printf("TOTAL = RS$ %.2f\n", $salario);
?>