<?php
$handle = fopen('php://stdin', 'a');
$handle = fopen('php://stdin', 'b');
$a = intval(trim(fgets($handle)));
$b = intval(trim(fgets($handle)));
$soma = $a + $b;
printf("SOMA = %d\n", $soma);
?>