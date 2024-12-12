<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <?php
            const SAL_MIN = 1412; 
            $salario = $_POST["salario"] ?? SAL_MIN;
        ?>
        <h1>Analisando Salário</h1>
        <h3>Observação: Os dados passados não serão armazenados</h3>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <label for="salario">Seu salário</label>
            <input type="number" name="salario" step="0.01" value="<?= $salario ?>" min="1412">
            <p>Considerando salario minimo de <strong>R$1.412,00</strong> do ano de <i>2024</i></p>
            <input type="submit" value="Calcular">  
        </form>
        <p><a href="http://localhost/cursophp/">Voltar</a></p>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            $salMinRecebidos = floor($salario / (float)SAL_MIN); 
            $resto = $salario - SAL_MIN * $salMinRecebidos;
            echo "<p>Seu salário de ".numfmt_format_currency($padrao,$salario,"BRL")." corresponde a <strong>$salMinRecebidos salários mínimos</strong> + <i>" .numfmt_format_currency($padrao,$resto,"BRL")."</i>";
        ?>

    </section>
    
    
</body>
</html>