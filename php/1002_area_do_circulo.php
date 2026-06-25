<?php
// Não precisa de fopen! A constante STDIN já vem pronta.
$raio = floatval(trim(fgets(STDIN)));

$pi = 3.14159;
$area = $pi * $raio * $raio;
printf("A=%.4f\n", $area);
?>