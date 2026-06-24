<?php

$handle = fopen('php://stdin', 'r');
$raio = floatval(trim(fgets($handle)));
$pi = 3.14159;
$area = $pi * $raio * $raio;
printf("A=%.4f\n", $area);
?>