<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seu salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salMinimo = 1_412;
        $salario = $_POST['sal'] ?? $salMinimo;
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        $contador = 0;
        $diferenca = 0;

        if($salario >= $salMinimo) {
            for ($i = $salMinimo; $i <= $salario; $i += $salMinimo){ 
                $contador++;

            };
            $diferenca = $salario - ($i - $salMinimo);
        }else {
            $contador = 0;
            $diferenca = $salario;
        }
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="sal" step="0.01" value="<?=$salario?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>$contador salários mínimos</strong> + " . numfmt_format_currency($padrao, $diferenca, "BRL") . "</p>";
        ?>
    </section>
</body>
</html>