<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira do Joãozinho</title>
    <link rel="exercicio06.css" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Compra de Frutas e Verduras do Joãozinho</h1>

        <?php
        // Preços por kg e quantidades compradas por Joãozinho
        $produtos = [
            "maçã" => ["preco_kg" => 5.00, "quantidade_kg" => 2],
            "melancia" => ["preco_kg" => 3.00, "quantidade_kg" => 1],
            "laranja" => ["preco_kg" => 4.50, "quantidade_kg" => 2],
            "repolho" => ["preco_kg" => 2.50, "quantidade_kg" => 1],
            "cenoura" => ["preco_kg" => 6.00, "quantidade_kg" => 0.5],
            "batatinha" => ["preco_kg" => 7.00, "quantidade_kg" => 1]
        ];

        $dinheiro_disponivel = 50.00;
        $total_gasto = 0.00;

        // Calcula o valor gasto em cada produto
        foreach ($produtos as $produto => $info) {
            $total_gasto += $info["preco_kg"] * $info["quantidade_kg"];
        }

        // Determina o saldo e a cor da mensagem
        if ($total_gasto > $dinheiro_disponivel) {
            $valor_acima = $total_gasto - $dinheiro_disponivel;
            $mensagem = "Joãozinho gastou R$ " . number_format($total_gasto, 2) . " e ficou R$ " . number_format($valor_acima, 2) . " acima do disponível.";
            $cor = "red";
        } elseif ($total_gasto < $dinheiro_disponivel) {
            $valor_restante = $dinheiro_disponivel - $total_gasto;
            $mensagem = "Joãozinho gastou R$ " . number_format($total_gasto, 2) . " e ainda pode gastar R$ " . number_format($valor_restante, 2) . ".";
            $cor = "blue";
        } else {
            $mensagem = "Joãozinho gastou exatamente R$ " . number_format($total_gasto, 2) . ". O saldo para compras foi esgotado.";
            $cor = "green";
        }
        ?>

        <!-- Exibição da mensagem -->
        <p id="resultado" class="<?php echo $cor; ?>"><?php echo $mensagem; ?></p>

    </div>

    <script src="script.js"></script>
</body>
</html>
