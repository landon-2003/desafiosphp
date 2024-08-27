<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num = $_POST["n"] ?? 1;
    ?>
    <main>
        <h1>Informe Um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="n">Número:</label>
            <input type="number" name="n" id="n" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        echo "Analisando o <strong>número $num</strong>, temos:<br>";

        $quad = sqrt($num);
        echo "<ul><li>A sua raíz quadrada é <strong>".number_format($quad, 3, ",", ".")."</strong></li></ul>";

        $cub = $num ** (1/3);
        echo "<ul><li>A sua raíz cúbica é <strong>".number_format($cub, 3 , ",", ".")."</strong></li></ul>"
        ?>
    </section>
</body>
</html>