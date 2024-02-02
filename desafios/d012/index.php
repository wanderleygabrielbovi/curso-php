<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_POST['segundos'] ?? 0;
        $copiaSeg = $segundos;

        $semana = (int) ($copiaSeg / 604_800);
        $copiaSeg %= 604_800;

        $dia = (int) ($copiaSeg / 86_400);
        $copiaSeg %= 86_400;

        $hora = (int) ($copiaSeg / 3_600);
        $copiaSeg %= 3_600;

        $min = (int) ($copiaSeg / 60);
        $copiaSeg %= 60;

        $seg = $copiaSeg;

    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" min="0" step="1" require value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($segundos, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$seg?> segundos</li>
        </ul>
    </section>
</body>
</html>