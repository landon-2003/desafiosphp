<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $v1 = $_POST["v1"]??1;
    $p1 = $_POST["p1"]??1;
    $v2 = $_POST["v2"]??1;
    $p2 = $_POST["p2"]??1;
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo Das Médias</h2>
        <?php 
        $mediasim = ($v1+$v2)/2;
        $mediapon = (($v1 * $p1)+($v2 * $p2))/($p1 + $p2);
        echo "Analisando os valores $v1 e $v2:";
        echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ".number_format($mediasim, 3, "," , ".").".</li></ul>";
        echo "<ul><li>A <strong>Média Aritmética Ponderada</strong> entre os valores é igual a ".number_format($mediapon, 3, "," , ".").".</li></ul>";
        ?>
    </section>
</body>
</html>