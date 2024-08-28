<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $anoatual = date("Y");
    $nas = $_POST["nas"]??2000;
    $idano = $_POST["idano"]??$anoatual;
    ?>
    <main>
        <h2>Calculando A Sua Idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="nas">Em que ano você nasceu?</label>
        <input type="number" name="nas" id="nas" value="<?=$nas?>">
        <label for="idano">Quer saber sua idade em que ano?(atualmente estamos em <strong><?=$anoatual?></strong>)</label>
        <input type="number" name="idano" id="idano" value="<?=$idano?>">
        <input type="submit" value="Qual será minha idade">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $idade = $idano - $nas;
        echo "Quem nasceu em $nas vai ter <strong>$idade anos</strong> em $idano";
        ?>
    </section>
</body>
</html>