<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Cálculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>O Resultado Final</h1>
        <?php 
            $n = $_REQUEST["num"];
            $r1 = $n + 1;
            $r2 = $n - 1;
        echo "<p>O número escolhido foi <strong>$n</strong>";
        echo "<p> O sucessor de $n é <strong>$r1</strong>";
        echo "<p>O antecessor de $n é <strong>$r2</strong>"
        ?>
        <br>
        <a href="index.html"><input type="button" value="<-Voltar"></a>
    </main>
</body>
</html>