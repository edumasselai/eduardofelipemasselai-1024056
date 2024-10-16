<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Juros Compostos - Moto</title>
    <link rel="stylesheet" href="exercicio09.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Juros Compostos</h1>
        <form method="POST">
            <label for="valorMoto">Valor da Moto (R$):</label>
            <input type="number" id="valorMoto" name="valorMoto" required step="0.01">

            <label for="parcelas">Número de Parcelas:</label>
            <select id="parcelas" name="parcelas" required>
                <option value="24">24 parcelas (2% juros)</option>
                <option value="36">36 parcelas (2,3% juros)</option>
                <option value="48">48 parcelas (2,6% juros)</option>
                <option value="60">60 parcelas (2,9% juros)</option>
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
                    $juros = 0.02;
                    break;
                case 36:
                    $juros = 0.023;
                    break;
                case 48:
                    $juros = 0.026;
                    break;
                case 60:
                    $juros = 0.029;
                    break;
                default:
                    echo "<p class='resultado'>Opção de parcelas inválida.</p>";
                    exit;
            }

            // Fórmula de juros compostos: M = C * (1 + i)^t
            $montante = $valorMoto * pow((1 + $juros), $parcelas);

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
