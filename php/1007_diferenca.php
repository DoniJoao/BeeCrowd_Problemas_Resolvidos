<?php
$handle = fopen('php://stdin', 'r');
$a = floatval(trim(fgets($handle)));
$b = floatval(trim(fgets($handle)));
$c = floatval(trim(fgets($handle)));
$d = floatval(trim(fgets($handle)));
$diferenca = ($a * $b) - ($c * $d);
printf("DIFERENCA = %d\n", $diferenca);
?>