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
        <p><strong>1 Dolár p/Real= R$5,50</strong></p>
        <p><strong>1 Dolár p/Euro= €0,89</strong></p>
        <?php 
            $n = $_REQUEST["din"] ?? 0;
            $eur = (float)$n*0.89;
            $real = (float)$n*5.50;
            echo "Seu valor <strong>USD$".number_format($n,2)."</strong> em Reais é <strong>R$".number_format($real, 2, "," , ".")."</strong>";
            echo " em Euros é <strong>€".number_format($eur, 2)."</strong>,abaixo temos o botão de voltar";
        ?>
        <a href="index.html"><input type="button" value="<-Voltar"></a>
    </main>
</body>
</html>