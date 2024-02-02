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
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $numero = $_POST["numero"] ?? 0;
                
                echo "O número escolhido foi <strong>$numero</strong>";
                echo "<br><em>O seu antecessor é </em>" . ($numero - 1);
                echo "<br><em>O seu sucessor é </em>" . ($numero + 1);
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>