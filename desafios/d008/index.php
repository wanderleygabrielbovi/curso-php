<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe um Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_POST['num'] ?? 0;
        $quadrado = sqrt($numero);
        $cubico = $numero ** (1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" step="0.01" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";

            echo "<ul><li>A raiz quadrada é <strong>" . number_format($quadrado, 2,",", ".") . "</strong></li>";

            echo "<li>A raiz cúbica é <strong>" . number_format($cubico, 2, ",", ".") . "</strong></li></ul>";
        ?>
    </section>
</body>
</html>