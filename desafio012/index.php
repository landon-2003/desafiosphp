<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $ts = $_POST["ts"]??1;
    ?>
    <main>
        <h2>Calculadora De Tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="ts">Qual é o total de segundos?</label>
            <input type="number" name="ts" id="ts" min="0" value="<?=$ts?>" step="1" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
        $sem = intdiv($ts,604_800);
        $res1 = $ts % 604_800;
        $dia = intdiv($res1,86_400);
        $res2 = $res1 % 86_400;
        $hora = intdiv($res2,3_600);
        $res3 = $res2 % 3_600;
        $min = intdiv($res3, 60);
        $seg = $res3 % 60;
        echo "Analisando o valor que você digitou, <strong>".number_format($ts, 0, "," , ".")." segundos</strong> equivalem a um total de:";
        echo "<ul><li>$sem Semanas.</li></ul>";
        echo "<ul><li>$dia Dias.</li></ul>";
        echo "<ul><li>$hora Horas.</li></ul>";
        echo "<ul><li>$min Minutos.</li></ul>";
        echo "<ul><li>$seg Segundos.</li></ul>";
        ?>
    </section>
</body>
</html>