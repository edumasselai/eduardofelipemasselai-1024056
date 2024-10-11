<?php
// Valor à vista da moto
$valor_a_vista = 8654.00;

// Função para calcular o valor das parcelas
function calcular_parcelas($valor_a_vista, $num_parcelas, $taxa_juros) {
    // Converte a taxa de juros para formato decimal
    $taxa_decimal = $taxa_juros / 100;
    
    // Calcula o montante total com a fórmula dos juros simples
    $montante = $valor_a_vista * (1 + ($taxa_decimal * $num_parcelas / 12));
    
    // Calcula o valor da parcela
    $valor_parcela = $montante / $num_parcelas;
    
    return $valor_parcela;
}

// Opções de parcelamento e taxas de juros
$opcoes = [
    ["parcelas" => 24, "taxa_juros" => 1.5],
    ["parcelas" => 36, "taxa_juros" => 2.0],
    ["parcelas" => 48, "taxa_juros" => 2.5],
    ["parcelas" => 60, "taxa_juros" => 3.0]
];

// Exibe os resultados
foreach ($opcoes as $opcao) {
    $num_parcelas = $opcao["parcelas"];
    $taxa_juros = $opcao["taxa_juros"];
    
    $valor_parcela = calcular_parcelas($valor_a_vista, $num_parcelas, $taxa_juros);
    
    echo "Para $num_parcelas parcelas com juros de $taxa_juros%, o valor da parcela será: R$ " . number_format($valor_parcela, 2, ',', '.') . "<br>";
}

?>
