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
        <p><strong>1 Euro p/Real= R$6,00</strong></p>
        <p><strong>1 Euro p/Dólar= €1,07</strong></p>
        <?php 
            $n = $_REQUEST["din"];
            $dol = (float)$n*1.07;
            $real = (float)$n*6.00;
            echo "Seu valor <strong>€$n</strong> em Reais é <strong>R$$real</strong> e em Dólares é <strong>$dol</strong>,abaixo temos o botão de voltar";
        ?>
        <a href="index.html"><input type="button" value="<-Voltar"></a>
    </main>
</body>
</html>