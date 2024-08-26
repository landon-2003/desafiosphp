<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05 Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <main>
            <h1>Analisador De Número Real</h1>
            <?php 
                $num = $_REQUEST["n"] ?? 0;

                echo "<p>Analisando o número <strong>".number_format($num, 3, "," , ".")."</strong> informado pelo usuário:</p>";

                $int = (int)$num;
                echo "<ul><li>A parte inteira do número é <strong>".number_format($int, 0, "," , ".")."</strong></li></ul>";

                $fra = $num - $int;
                
                echo "<ul><li>A parte fracionada do número é <strong>".number_format($fra, 3, "," , ".")."</strong></li></ul>";
            ?>
            <a href="index.html"><button><-Voltar</button></a>
        </main>
</body>
</html>