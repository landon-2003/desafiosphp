<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
    $valor = $_POST["valor"] ?? 1;
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="valor">Qual valor você deseja sacar?(R$*)</label>
        <input type="number" name="valor" id="valor" value="<?=$valor?>">
        <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
        $cem = intdiv($valor,100);
        $r1 = $valor % 100;
        $cinq = intdiv($r1, 50);
        $r2 = $r1 % 50;
        $vin = intdiv($r2, 20);
        $r3 = $r2 % 20;
        $dez = intdiv($r3, 10);
        $r4 = $r3 % 10;
        $cinc = intdiv($r4, 5);
        $r5 = $r4 % 5;
        $dois = intdiv($r5, 2);
        $r6 = $r5 % 2;
        $um = $r6 / 1;

        echo "<h2>Saque De R$".number_format($valor, 2, "," , ".")." Realizado</h2>";

        echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";
        ?>
        <ul>
            <li><img src="./imagens/100-reais.jpg" alt="nota de cem reais" class="nota"> X<?=$cem?></img></li>
            <li><img src="./imagens/50-reais.jpg" alt="nota de cinquenta reais" class="nota"> X<?=$cinq?></li>
            <li><img src="./imagens/20-reais.jpg" alt="nota de vinte reais" class="nota"> X<?=$vin?></li>
            <li><img src="./imagens//10-reais.jpg" alt="nota de dez reais" class="nota"> X<?=$dez?></li>
            <li><img src="./imagens//5-reais.jpg" alt="nota de cinco reais" class="nota"> X<?=$cinc?></li>
            <li><img src="./imagens//2-reais.jpg" alt="nota de dois reais" class="nota"> X<?=$dois?></li>
            <li><img src="./imagens//1-real.jpg" alt="moeda de 1 real" class="nota"> X<?=$um?></li>
        </ul>
    </section>
</body>
</html>