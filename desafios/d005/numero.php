<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_POST["real"] ?? 0;

            echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário:</p>";

            $inteiro = (int) $numero;
            $fracao = $numero - $inteiro;

            echo "<ul><li> A parte inteira do número é <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></li>";

            echo "<li> A parte fracionária número é <strong>" . number_format($fracao, 3, ",", ".") . "</strong></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>