<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $pp = $_POST["pp"] ?? 0;
    $reaj = $_POST["reaj"] ?? 0;

    ?>
    <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <h2>Reajustador De Preços</h2>

        <label for="pp">Preço Do Produto(R$)</label>
        <input type="number" name="pp" id="pp" min="0.10" step="0.01" value="<?=$pp?>">

        <label for="reaj">Qual será o percentual de reajuste?(<strong><span id="p">?</span>%</strong>)</label>
        <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()">

        <input type="submit" value="Reajustar">
    </form>
    </main>
    <section>
        <h2>Resultado Do Reajuste</h2>
        <?php 
        $formula = $pp*$reaj/100;
        $npp = $formula + $pp;

        echo "O produto que custava R$".number_format($pp, 2, "," , ".")." com <strong>$reaj% de aumento</strong> vai passar a custar <strong>R$".number_format($npp, 2, ",", ".")."</strong> a partir de agora.";
        ?>
    </section>
    <script>
        mudaValor()

        function mudaValor(){
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>