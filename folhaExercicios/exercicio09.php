<?php
// Valor à vista da moto
$valor_a_vista = 8654.00;

// Função para calcular o valor das parcelas usando juros compostos
function calcular_parcelas($valor_a_vista, $num_parcelas, $taxa_juros) {
    // Converte a taxa de juros para formato decimal
    $taxa_decimal = $taxa_juros / 100;
    
    // Calcula o montante total usando a fórmula dos juros compostos
    $montante = $valor_a_vista * pow(1 + $taxa_decimal, $num_parcelas);
    
    // Calcula o valor da parcela
    $valor_parcela = $montante / $num_parcelas;
    
    return $valor_parcela;
}

// Opções de parcelamento e taxas de juros
$opcoes = [
    ["parcelas" => 24, "taxa_juros" => 2.0],
    ["parcelas" => 36, "taxa_juros" => 2.3],
    ["parcelas" => 48, "taxa_juros" => 2.6],
    ];
?>
