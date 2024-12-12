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
            $real = $_POST["dindin"];

            $inicio = date("m-d-Y",strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $dolar = $real/$cotacao;

            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            echo "Sua quantia de <i>".numfmt_format_currency($padrao,$real,"BRL")."</i> equivale a *<strong>".numfmt_format_currency($padrao,$dolar,"USD")."</strong>";

            echo "<p>* Utilizando cotação atual de <strong  >" .numfmt_format_currency($padrao,$cotacao,"BRL")."</strong  >. <br>Dados obtidos do dia ".date("d/m/Y")." pelo sistema do <strong><a href=\"https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MSwiZGF0YUZpbmFsQ290YWNhbyI6IjEyLTA1LTIwMjQiLCJkYXRhSW5pY2lhbCI6IjExLTI4LTIwMjQiLCIkb3JkZXJieSI6IgQyBCBkZXNjIn0sInByb3ByaWVkYWRlcyI6WzAsMl0sInBlc3F1aXNhZG8iOnRydWUsImFjdGl2ZVRhYiI6InRhYmxlIiwiZ3JpZFN0YXRlIjp7AzADOlt7A0IDIgQwBCIsA0EDfSx7A0IDIgQxBCIsA0EDfSx7A0IDIgQyBCIsA0EDfV0sAzEDOnt9LAMyAzpbXSwDMwM6e30sAzQDOnt9LAM1Azp7fX0sInBpdm90T3B0aW9ucyI6ewNhAzp7fSwDYgM6W10sA2MDOjUwMCwDZAM6W10sA2UDOltdLANmAzpbXSwDZwM6ImtleV9hX3RvX3oiLANoAzoia2V5X2FfdG9feiIsA2kDOnt9LANqAzp7fSwDawM6ODUsA2wDOmZhbHNlLANtAzp7fSwDbgM6e30sA28DOiJDb250YWdlbSIsA3ADOiJUYWJsZSJ9fQ==\">Banco Central do Brasil</a></strong>"

        ?>
        <p><a href="http://localhost/cursophp/Cotacao_Avancado">Voltar</a></p>
    </main>
</body>
</html>