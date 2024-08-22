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
        <h1 style="text-align: center;">Resultado:</h1>
        <?php
        $min = $_REQUEST["p1"];
        $max = $_REQUEST["p2"];
        $num = mt_rand($min, $max);
        echo "Gerando um número aleatório entre $min e $max...\n";
        echo "O número gerado foi <strong>$num</strong>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504; Gerar Novamente</button>
        <a href="index.html"><button>Voltar</button></a>
    </main>
</body>
</html>