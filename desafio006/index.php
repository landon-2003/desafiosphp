<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $dividendo = $_POST["divd"]??0;
    $divisor = $_POST["divs"]??1;
    ?>
    <main>
        <h1>Anatomia De Uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="divd">Dividendo:</label>
            <input type="number" name="divd" id="divd" value="<?=$dividendo?>" min="0">
            <label for="divs">Divisor:</label>
            <input type="number" name="divs" id="divs" value="<?=$divisor?>" min="1">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura Da Divisão</h2>
        <?php 
        $quociente = intdiv($dividendo,$divisor);
        $resto = $dividendo % $divisor;
        echo "<ul>";
        echo "<li>Dividendo:$dividendo</li>";
        echo "<li>Divisor:$divisor</li>";
        echo "<li>Quociente:$quociente</li>";
        echo "<li>Resto:$resto</li>";
        echo "</ul>";
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>