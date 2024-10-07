<?php
// Dados fornecidos
$valor_a_vista = 22500.00;
$valor_parcela = 489.65;
$num_parcelas = 60;

// Cálculo do valor total do financiamento
$valor_total_financiamento = $valor_parcela * $num_parcelas;

// Cálculo do valor gasto em juros
$valor_juros = $valor_total_financiamento - $valor_a_vista;

// Exibição dos resultados
echo "O valor à vista do carro é: R$ " . number_format($valor_a_vista, 2, ',', '.') . "<br>";
echo "O valor total pago no financiamento será: R$ " . number_format($valor_total_financiamento, 2, ',', '.') . "<br>";
echo "O valor pago só de juros será: R$ " . number_format($valor_juros, 2, ',', '.');
?>
