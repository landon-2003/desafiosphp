<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salmin = 1412;
    $sal = $_POST["sal"] ?? $salmin;
    $quansal = intdiv($sal, $salmin);
    $resto = $sal-($salmin*$quansal);
    ?>
<main>
    <h1>Informe Seu Salário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="sal">Salário (R$)</label>
        <input type="number" name="sal" id="sal" value="<?=$sal?>" step="0.01">
        <p>Considerando o salário mínimo de <strong>R$1.412,00</strong></p>
        <input type="submit" value="Calcular">
    </form>
    <section>
        <h2>Resultado Final</h2>
        <?="Quem recebe um salário de R$".number_format($sal, 2, ",", ".")." ganha <strong> $quansal salários mínimos</strong> + R$".number_format($resto,2,",",".")?>
    </section>
</main>    
</body>
</html>