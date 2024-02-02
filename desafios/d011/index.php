<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_POST['preco'] ?? 0;
        $percent = $_POST['percent'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="preco">Preço do Produto(R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="percent">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="percent" id="percent" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$percent?>">
            
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
         $novoPreco = $preco + ($preco * ($percent/100));
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong><?=$percent?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novoPreco, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>
    <script>
        mudaValor();
        
        function mudaValor() {
            p.innerText = percent.value;
        }
    </script>
</body>
</html>