<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Idade</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <?php
            $anoAtual = date("Y");
            $nasc = $_POST["nasc"] ?? 2000;
            $ano = $_POST["ano"] ?? $anoAtual;

        ?>
        <h1>Calculando Raízes</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nasc">Ano de Nascimento</label>
            <input type="number" name="nasc" value="<?= $nasc ?>" min="1900" max="<?=$anoAtual?>">
            <label for="ano">Ano para calcular idade(Atualmente estamos em <strong><?=$anoAtual?></strong>)</label>    
            <input type="number" name="ano" value="<?= $ano ?>">
            <input type="submit" value="Calcular">  
        </form>
        <p><a href="http://localhost/cursophp/">Voltar</a></p>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nasc;
            if($idade < 0) echo "<p>ERRO! <strong>Ano de Nascimento</strong> não pode ser superior ao <strong>Ano de Pesquisa</strong>!</p>";
            else echo "<p>Idade em <u>$ano</u> = <strong>$idade anos</strong>";
        ?>

    </section>
    
    
</body>
</html>