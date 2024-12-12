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
            $valor = $_POST["numero"];
            echo "Para o valor <strong>$valor</strong>:<br><br>";
            echo "<i>Predecessor</i> = ".($valor  - 1)."<br>";
            echo "<i>Sucessor</i> = ".($valor  + 1);
        
        ?>
        <p><a href="http://localhost/cursophp/Predecessor_Sucessor/">Voltar</a></p>
    </main>
</body>
</html>