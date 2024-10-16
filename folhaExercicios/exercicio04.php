<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Retângulo</title>
</head>
<body>
    <h1>Cálculo da Área do Retângulo</h1>
    <form method="POST" id="retanguloForm">
        <input type="number" name="ladoA" placeholder="Comprimento do lado A (m)" required>
        <input type="number" name="ladoB" placeholder="Comprimento do lado B (m)" required>
        <button type="submit">Calcular Área</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ladoA = (float)$_POST['ladoA'];
        $ladoB = (float)$_POST['ladoB'];
        $area = $ladoA * $ladoB;

        // Verificar se a área é maior que 10
        if ($area > 10) {
            echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h1>";
        } else {
            echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h3>";
        }
    }
    ?>
</body>
</html>
