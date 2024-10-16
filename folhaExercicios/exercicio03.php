<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Quadrado</title>
</head>
<body>
    <h1>Cálculo da Área do Quadrado</h1>
    <form method="POST" id="quadradoForm">
        <input type="number" name="lado" placeholder="Comprimento do lado (m)" required>
        <button type="submit">Calcular Área</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = (float)$_POST['lado'];
        $area = $lado * $lado;

        echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados.</p>";
    }
    ?>
</body>
</html>
