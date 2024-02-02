<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $atual = date("Y");
        $anoNasc = $_POST['anoNasc'] ?? 2000;
        $ano = $_POST['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc" min="1900" max="<?=$atual?>" value="<?=$anoNasc?>">
            <label for="idade">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1900" max="<?=$atual?>" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $anoNasc;

            if ($idade > 1) {
                echo "<p>Quem nasceu em $anoNasc vai ter <strong>$idade anos</strong> em $ano!</p>";
            } else {
                echo "<p>Quem nasceu em $anoNasc vai ter <strong>$idade ano</strong> em $ano!</p>";
            }
                
        ?>
    </section>
</body>
</html>