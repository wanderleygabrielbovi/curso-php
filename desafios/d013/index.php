<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_POST['valor'] ?? 0;
        $copiaSaq = $saque;

        $tot100 = floor($copiaSaq / 100);
        $copiaSaq %= 100;

        $tot50 = floor($copiaSaq / 50);
        $copiaSaq %= 50;
        
        $tot20 = floor($copiaSaq / 20);
        $copiaSaq %= 20;

        $tot10 = floor($copiaSaq / 10);
        $copiaSaq %= 10;

        $tot5 = floor($copiaSaq / 5);
        $copiaSaq %= 5;

        $tot2 = floor($copiaSaq / 2);

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="valor" min="2" required value="<?=$saque?>">
            <p style="font-size: 0.6em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado!</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"><strong>x<?=$tot100?></strong></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"><strong><?=$tot50?></strong></li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"><strong><?=$tot20?></strong></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"><strong>x<?=$tot10?></strong></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"><strong>x<?=$tot5?></strong></li>
            <li><img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota"><strong><?=$tot2?></strong></li>
        </ul>
    </section>
</body>
</html>