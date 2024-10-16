<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Triângulo Retângulo</title>
</head>
<body>
    <h1>Cálculo da Área do Triângulo Retângulo</h1>
    <form method="POST" id="trianguloForm">
        <input type="number" name="base" placeholder="Comprimento da base (m)" required>
        <input type="number" name="altura" placeholder="Comprimento da altura (m)" required>
        <button type="submit">Calcular Área</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lê os valores da base e altura
        $base = (float)$_POST['base'];
        $altura = (float)$_POST['altura'];

        // Calcula a área do triângulo
        $resultado = ($base * $altura) / 2;

        // Exibe o resultado
        echo "<p>A área do triângulo retângulo com base $base metros e altura $altura metros é $resultado metros quadrados.</p>";
    }
    ?>
</body>
</html>
