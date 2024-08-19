<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolución de Ecuación de Segundo Grado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .result {
            margin-top: 20px;
        }
        .procedure {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Resolver Ecuación de Segundo Grado</h1>
    <form method="post" action="">
        <label for="a">Coeficiente a:</label>
        <input type="number" id="a" name="a" required step="any"><br><br>

        <label for="b">Coeficiente b:</label>
        <input type="number" id="b" name="b" required step="any"><br><br>

        <label for="c">Coeficiente c:</label>
        <input type="number" id="c" name="c" required step="any"><br><br>

        <input type="submit" name="submit" value="Resolver">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtener los valores de los coeficientes
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Calcular el discriminante
        $discriminante = $b * $b - 4 * $a * $c;

        echo "<div class='result'>";
        echo "<h2>Resultado:</h2>";
        
        // Verificar el discriminante y calcular las raíces
        if ($discriminante > 0) {
            $raiz1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $raiz2 = (-$b - sqrt($discriminante)) / (2 * $a);
            echo "<p>Las soluciones son: x1 = $raiz1 y x2 = $raiz2</p>";
        } elseif ($discriminante == 0) {
            $raiz = -$b / (2 * $a);
            echo "<p>La solución es: x = $raiz</p>";
        } else {
            echo "<p>La ecuación no tiene soluciones reales.</p>";
        }
        
        // Mostrar el procedimiento
        echo "<div class='procedure'>";
        echo "<h3>Procedimiento:</h3>";
        echo "<p>1. Dada la ecuación de segundo grado: <b>{$a}x<sup>2</sup> + {$b}x + {$c} = 0</b></p>";
        echo "<p>2. Calculamos el discriminante: <b>Δ = b<sup>2</sup> - 4ac</b></p>";
        echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;Δ = {$b}<sup>2</sup> - 4({$a})({$c}) = $discriminante</p>";
        
        if ($discriminante >= 0) {
            echo "<p>3. Como Δ ≥ 0, la ecuación tiene soluciones reales.</p>";
            echo "<p>4. Las soluciones se calculan con la fórmula: <b>x = (-b ± √Δ) / 2a</b></p>";
            if ($discriminante > 0) {
                echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;x1 = (-{$b} + √{$discriminante}) / 2({$a}) = $raiz1</p>";
                echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;x2 = (-{$b} - √{$discriminante}) / 2({$a}) = $raiz2</p>";
            } else {
                echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;x = -{$b} / 2({$a}) = $raiz</p>";
            }
        } else {
            echo "<p>3. Como Δ < 0, la ecuación no tiene soluciones reales.</p>";
        }

        echo "</div>";
        echo "</div>";
    }
    ?>
</body>
</html>
