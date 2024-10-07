<?php
// O array de pastas fornecido
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb", 
            "bancoDados 1", 
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web", 
            "bancoDados 2", 
            "engSoft 2"
        )
    )
);

// Função recursiva para imprimir a árvore de pastas
function imprimir_arvore($pastas, $nivel = 0) {
    // Define a indentação com base no nível da árvore
    $indentacao = str_repeat("-- ", $nivel);
    
    foreach ($pastas as $chave => $valor) {
        // Se o valor for um array, imprimimos a chave (pasta) e chamamos a função recursivamente
        if (is_array($valor)) {
            echo $indentacao . $chave . "<br>";
            imprimir_arvore($valor, $nivel + 1); // Chama a função recursivamente para descer na hierarquia
        } else {
            // Se não for um array, imprime o valor (arquivo)
            echo $indentacao . $valor . "<br>";
        }
    }
}

// Chama a função para imprimir a árvore de pastas
imprimir_arvore($pastas);
?>
