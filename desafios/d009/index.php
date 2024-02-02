<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_POST['valor1'] ?? 0;
        $valor2 = $_POST['valor2'] ?? 0;
        $peso1 = $_POST['peso1'] ?? 0;
        $peso2 = $_POST['peso2'] ?? 0;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php
            $simples = ($valor1 + $valor2) / 2;
            $ponderada = ((($peso1 * $valor1) + ($peso2 * $valor2)) / ($peso1 + $peso2));


            echo "<p>Analisando os valores $valor1 e $valor2:</p>";

            echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($simples, 2, ",", ".") . ".</li>";

            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($ponderada, 2, ",", ".") . ".</li></ul>";
        ?>
    </section>
</body>
</html>