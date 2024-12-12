<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preços</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <?php
            $preco = $_POST["preco"] ?? 0;
            $reajuste = $_POST["reajuste"] ?? 0;

        ?>
        <h1>Calculando Raízes</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <label for="preco">Preço original</label>
            <input type="number" name="preco" value="<?= $preco ?>" min="0">
            <label for="reajuste">Aumentando em <strong> <span id="perc"></span>%</strong> </label>    
            <input type="range" name="reajuste" id="reaj" min = 0% max="100" setp="1" oninput="mudaValor()" value="<?= $reajuste ?>">
            <input type="submit" value="Reajustar">  
        </form>
        <p><a href="http://localhost/cursophp/">Voltar</a></p>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
           $reajuste /= 100;
           $precoReajustado = $preco * (1+$reajuste);
           $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
           echo "<p> O produto que custava <i>".numfmt_format_currency($padrao,$preco,"BRL")."</i>, com reajuste de <u>".($reajuste*100)."%</u>, vai custar <strong>".numfmt_format_currency($padrao,$precoReajustado,"BRL")."</strong>"
        ?>
        <script>
           function mudaValor(){
             perc.innerText = reaj.value;  
           }
           mudaValor();
        </script>

    </section>
    
    
</body>
</html>