<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php
        // 0x = hexadecimal 0b = binário 0 = octal
        // $num = 010;
        // echo "O valor da variável é $num";
        
        // $valor = 300;
        // var_dump($valor);
        
        // $num = (integer) 3e2; 3x10(2)
        // echo "O valor é $num";

        // $casado = true;
        // var_dump($casado);
        // echo "O valor para casado é $casado";

        // $vet = [6, 2, 9, 3, 5];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>