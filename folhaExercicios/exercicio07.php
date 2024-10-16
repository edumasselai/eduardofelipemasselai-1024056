<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Juros - Financiamento do Carro</title>
    <link rel="stylesheet" href="exercicio07.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Juros</h1>
        <form method="POST">
            <label for="valorCarro">Valor do Carro (R$):</label>
            <input type="number" id="valorCarro" name="valorCarro" value="22500.00">

            <label for="valorParcela">Valor da Parcela (R$):</label>
            <input type="number" id="valorParcela" name="valorParcela" value="489.65">

            <label for="numeroParcelas">Número de Parcelas:</label>
            <input type="number" id="numeroParcelas" name="numeroParcelas" value="60">

            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valorCarro = (float) $_POST['valorCarro'];
            $valorParcela = (float) $_POST['valorParcela'];
            $numeroParcelas = (int) $_POST['numeroParcelas'];

            // Cálculo do valor total pago
            $valorTotalPago = $valorParcela * $numeroParcelas;

            // Cálculo dos juros pagos
            $jurosPagos = $valorTotalPago - $valorCarro;

            echo "<div class='resultado'>";
            echo "<h2>Resultado:</h2>";
            echo "<p>Valor total pago: R$ " . number_format($valorTotalPago, 2, ',', '.') . "</p>";
            echo "<p>Juros pagos: R$ " . number_format($jurosPagos, 2, ',', '.') . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
