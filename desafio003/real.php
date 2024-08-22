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
        <p><strong>1 Real p/Euro= R$0,16</strong></p>
        <p><strong>1 Real p/Dólar= €0,18</strong></p>
        <?php 
            $n = $_REQUEST["din"] ?? 0;
            $dol = (float)$n*0.18;
            $eur = (float)$n*0.16;
            echo "Seu valor <strong>R\$".number_format($n, 2,",",".")."</strong> em Euros é <strong>€".number_format($eur, 2)."</strong> e em Dólares é <strong>\$".number_format($dol, 2)."</strong>, abaixo temos o botão de voltar.";
        ?>
        <a href="index.html"><input type="button" value="<-Voltar"></a>
    </main>
</body>
</html>