<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exercicio01.css">
    <title>Soma de Três Valores</title>
</head>
<body>
    <h1>Calculadora de Soma</h1>
    <form method="POST" id="somaForm">
        <input type="number" name="valor1" placeholder="Valor 1" required>
        <input type="number" name="valor2" placeholder="Valor 2" required>
        <input type="number" name="valor3" placeholder="Valor 3" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = (int)$_POST['valor1'];
        $valor2 = (int)$_POST['valor2'];
        $valor3 = (int)$_POST['valor3'];

        $soma = $valor1 + $valor2 + $valor3;

        $cor = 'black'; // Cor padrão

        if ($valor1 > 10) {
            $cor = 'blue';
        } elseif ($valor2 < $valor3) {
            $cor = 'green';
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            $cor = 'red';
        }

        echo "<p style='color: $cor;'>Resultado da soma: $soma</p>";
    }
    ?>
</body>
</html>