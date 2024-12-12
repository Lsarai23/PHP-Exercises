<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <?php
            $valor = $_POST["valor"] ?? 2000;
            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        ?>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor">Valor a sacar(R$)*</label>
            <input type="number" name="valor" value="<?= $valor ?>" min="0" step="5">
            <p>*Notas disponíveis: R$100,R$50,R$10,R$5</p>
            <input type="submit" value="Sacar">  
        </form>
        <p><a href="http://localhost/cursophp/">Voltar</a></p>
    </main>

    <section>
        <h2>Saque de <?=numfmt_format_currency($padrao,$valor,"BRL")?> realizado!</h2>
        <?php 
            $reais100 = intdiv($valor, 100);
            $valor %= 100;

            $reais50 = intdiv($valor, 50);
            $valor %= 50;

            $reais10 = intdiv($valor, 10);
            $valor %= 10;

            $reais5 = intdiv($valor,5);
            $valor %= 5;
    
        ?>
        <ul>
            <li><img src="./img/100-reais.jpg" alt="100 reais" width="100"><strong>x<?=$reais100 ?></strong> </li>
            <li><img src="./img/50-reais.jpg" alt="50 reais" width="100"><strong>x<?=$reais50 ?></strong> </li>
            <li><img src="./img/10-reais.jpg" alt="10 reais" width="100"><strong>x<?=$reais10 ?></strong> </li>
            <li><img src="./img/5-reais.jpg" alt="5 reais" width="100"><strong>x<?=$reais5 ?></strong> </li>
            
        </ul>

    </section>
    
    
</body>
</html>