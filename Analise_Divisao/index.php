<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando Divisão</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <?php 
            $dividendo = $_POST["dividendo"] ?? 1;
            $divisor = $_POST["divisor"] ?? 1;
        ?>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" value="<?= $dividendo ?>" min="0">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" value="<?= $divisor ?>" min="1">
            <input type="submit" value="Calcular">  
        </form>
        <p><a href="http://localhost/cursophp/">Voltar</a></p>
    </main>

    <section>
        <table class="divisao">
            <tr>
                <?= "<td>$dividendo</td>" ?>
                <?= "<td>$divisor</td>" ?>
            </tr>
            <tr>
                <?= "<td>".($dividendo%$divisor)."</td>" ?>
                <?= "<td>".(intdiv($dividendo,$divisor))."</td>" ?>
            </tr>
        </table>
    </section>
    
    
</body>
</html>