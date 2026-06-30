<?php
fscanf(STDIN, "%i", $x);
fscanf(STDIN, "%f", $y);
$consumo = $x / $y;
printf("%.3f km/l\n", $consumo);
?>