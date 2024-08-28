<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Triângulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Calculo da área do triangulo</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = isset($_POST['base']) ? (float)$_POST['base'] : 0;
            $altura = isset($_POST['altura']) ? (float)$_POST['altura'] : 0;

            if ($base <= 0 || $altura <= 0) {
                echo "<p style='color: red;'>Base e altura devem ser valores positivos.</p>";
            } else {

                $area = ($base * $altura) / 2;

                $valorLimite = 100;

                if ($area > $valorLimite) {
                    echo "<p>A área do triângulo é <strong>$area</strong>, que é maior que $valorLimite.</p>";
                } else {
                    echo "<p>A área do triângulo é <strong>$area</strong>, que é menor ou igual a $valorLimite.</p>";
                }
            }
        }
        ?>

        <form action="quest5.php" method="post">
            <label for="base">Base (em unidades):</label>
            <input type="number" id="base" name="base" step="0.01" required>

            <label for="altura">Altura (em unidades):</label>
            <input type="number" id="altura" name="altura" step="0.01" required>

            <button type="submit">Calcular Área</button>
        </form>
    </div>
</body>
</html>