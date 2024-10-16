<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisibilidade por 2</title>
</head>
<body>
    <h1>Teste de Divisibilidade por 2</h1>
    <form method="POST" id="divisibilidadeForm">
        <input type="number" name="numero" placeholder="Digite um número" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int)$_POST['numero'];

        if ($numero % 2 == 0) {
            echo "<p style='color: green;'>Valor divisível por 2</p>";
        } else {
            echo "<p style='color: red;'>O valor não é divisível por 2</p>";
        }
    }
    ?>
</body>
</html>
