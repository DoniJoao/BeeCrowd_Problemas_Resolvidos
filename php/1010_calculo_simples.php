<?php
fscanf(STDIN, "%d %d %f", $codigo1, $numero1, $valor_peca1);
fscanf(STDIN, "%d %d %f", $codigo2, $numero2, $valor_peca2);

$valor_a_pagar = ($numero1 * $valor_peca1) + ($numero2 * $valor_peca2);

printf("VALOR A PAGAR: R$ %.2f\n", $valor_a_pagar);
?>