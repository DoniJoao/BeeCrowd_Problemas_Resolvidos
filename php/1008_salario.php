<?php
$handle = fopen('php://stdin', 'r');
$numero = intval(trim(fgets($handle)));
$horas = intval(trim(fgets($handle)));
$valor_hora = floatval(trim(fgets($handle)));

$salario = $horas * $valor_hora;

printf("NUMBER = %d\n", $numero);
printf("SALARY = U$ %.2f\n", $salario);
?>