<?php
$handle = fopen('php://stdin', 'r');
$a = floatval(trim(fgets($handle)));
$b = floatval(trim(fgets($handle)));
$media = (($a * 3.5) + ($b * 7.5)) / 11;
printf("MEDIA = %.5f\n", $media);
?>