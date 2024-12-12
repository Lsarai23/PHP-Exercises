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
           $valor = $_POST["dindin"];
           $dolar = $valor/6.0;
           $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
           echo "Sua quantia de <i>".numfmt_format_currency($padrao,$valor,"BRL")."</i> equivale à <strong>".numfmt_format_currency($padrao,$dolar,"USD")."</strong>";
        ?>
        <p><a href="http://localhost/cursophp/Cotacao">Voltar</a></p>
    </main>
</body>
</html>