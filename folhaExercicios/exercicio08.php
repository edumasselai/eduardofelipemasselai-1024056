<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Juros Simples - Moto</title>
    <link rel="stylesheet" href="exercicio08.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Juros Simples</h1>
        <form method="POST">
            <label for="valorMoto">Valor da Moto (R$):</label>
            <input type="number" id="valorMoto" name="valorMoto" value="8654.00" readonly>

            <label for="parcelas">Número de Parcelas:</label>
            <select id="parcelas" name="parcelas" required>
                <option value="24">24 parcelas (1,5% juros)</option>
                <option value="36">36 parcelas (2% juros)</option>
                <option value="48">48 parcelas (2,5% juros)</option>
                <option value="60">60 parcelas (3% juros)</option>
            </select>

            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valorMoto = (float) $_POST['valorMoto'];
            $parcelas = (int) $_POST['parcelas'];

            // Definir a taxa de juros com base no número de parcelas
            switch ($parcelas) {
                case 24:
                    $juros = 0.015; // 1,5%
                    break;
                case 36:
                    $juros = 0.02;  // 2%
                    break;
                case 48:
                    $juros = 0.025; // 2,5%
                    break;
                case 60:
                    $juros = 0.03;  // 3%
                    break;
                default:
                    echo "<p class='resultado'>Opção de parcelas inválida.</p>";
                    exit;
            }

            // Fórmula de juros simples: M = C + (C * i * t)
            $montante = $valorMoto + ($valorMoto * $juros * ($parcelas / 12));

            // Valor da parcela
            $valorParcela = $montante / $parcelas;

            echo "<div class='resultado'>";
            echo "<h2>Resultado:</h2>";
            echo "<p>Valor total a ser pago: R$ " . number_format($montante, 2, ',', '.') . "</p>";
            echo "<p>Valor da parcela ({$parcelas} vezes): R$ " . number_format($valorParcela, 2, ',', '.') . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
