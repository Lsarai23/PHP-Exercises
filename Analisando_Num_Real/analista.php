<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style/style.css">

</head>
<body>
    <header>
        <h1>Resultado!</h1>
    </header>
    <main>
        <?php 
            $valor = $_POST["numReal"];
            $inteiro = (int)$valor;
            $frac = $valor - $inteiro;
            echo "Para o valor <i>". number_format($valor,3,",",".")."</i><ul>";  
            echo "<li>A parte <i>inteira</i> é <strong>".number_format($inteiro,0,thousands_separator:".")."</strong></li>";
            echo "<li>A parte <i>fracionária</i> é <strong>".number_format($frac,3,decimal_separator:",")."</strong></li></ul>";

        ?>
        <p><a href="http://localhost/cursophp/Analisando_Num_Real">Voltar</a></p>
    </main>
</body>
</html>