<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
$maiorAB = ($a + $b + abs($a - $b)) / 2;
$maiorFinal = ($maiorAB + $c + abs($maiorAB - $c)) / 2;
printf("%d eh o maior\n", $maiorFinal);
?>