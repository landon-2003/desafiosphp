<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1 style="text-align: center;">Resultado:</h1>
        <h2 style="text-align: center;">O valor de cotação são fixos, usado de referência os dados do dia 30/06/24</h2>
        <p><strong>1 Euro p/Real= R$6,13</strong></p>
        <p><strong>1 Euro p/Dólar= €1,11</strong></p>
        <?php 
            $n = $_REQUEST["din"] ?? 0;
            $dol = (float)$n*1.11;
            $real = (float)$n*6.13;
            echo "Seu valor <strong>€".number_format($n, 2)."</strong> em Reais é <strong>R$".number_format($real, 2, "," , ".")."</strong> e em Dólares é <strong>\$".number_format($dol, 2)."</strong>,abaixo temos o botão de voltar";
        ?>
        <a href="index.html"><input type="button" value="<-Voltar"></a>
    </main>
</body>
</html>