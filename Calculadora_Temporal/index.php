<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Temporal</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <?php
            $tempo = $_POST["tempo"] ?? 2000;
            $ano = $_POST["ano"] ?? $anoAtual;

        ?>
        <h1>Calculadora Temporal</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <label for="tempo">Tempo em segundos</label>
            <input type="number" name="tempo" value="<?= $tempo ?>" min="0">
            <input type="submit" value="Calcular">  
        </form>
        <p><a href="http://localhost/cursophp/">Voltar</a></p>
    </main>

    <section>
        <h2>Resultado</h2>
        <p><strong><?= number_format($tempo,thousands_separator:".")?> segundos</strong> representam:</p>
        <?php 
            $semanas = intdiv($tempo, 60*60*24*7);
            $tempo %= 60*60*24*7;

            $dias = intdiv($tempo, 60*60*24);
            $tempo %= 60*60*24;

            $horas = intdiv($tempo, 60*60);
            $tempo %= 60*60;

            $minutos = intdiv($tempo,60);
            $tempo %= 60;

            $segundos = $tempo;
        ?>
        <ul>
            <li><?= $semanas?> semanas</li>
            <li><?= $dias?> dias</li>
            <li><?= $horas?> horas</li>
            <li><?= $minutos?> minutos</li>
            <li><?= $segundos?> segundos</li>
            
        </ul>

    </section>
    
    
</body>
</html>