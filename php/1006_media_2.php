<?php
$handle = fopen('php://stdin', 'r');
$a = floatval(trim(fgets($handle)));
$b = floatval(trim(fgets($handle)));
$c = floatval(trim(fgets($handle)));
$media = (($a * 2) + ($b * 3) + ($c * 5)) / 10;
printf("MEDIA = %.1f\n", $media);
?>