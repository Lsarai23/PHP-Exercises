<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <?php
            function average($valor1, $valor2){
            return ($valor1 + $valor2) / 2;
            }
            function w_average($valor1,$peso1, $valor2,$peso2){
                return ($valor1*$peso1 + $valor2*$peso2) / ($peso1 + $peso2);
            }
            $valor1 = $_POST["valor1"] ?? 0;
            $peso1 = $_POST["peso1"] ?? 1;
            $valor2 = $_POST["valor2"] ?? 0;
            $peso2 = $_POST["peso2"] ?? 1;

        ?>
        <h1>Calculando Médias</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" value="<?= $valor1 ?>">
            
            <label for="peso1">Peso 1</label>
            <input type="number" name="peso1" value="<?= $peso1 ?>" min="1">
            
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" value="<?= $valor2 ?>">
            
            <label for="peso2">Peso 2</label>
            <input type="number" name="peso2" value="<?= $peso2 ?>" min="1">
            
            <input type="submit" value="Calcular">  
        </form>
        <p><a href="http://localhost/cursophp/">Voltar</a></p>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $resultadoAvg = average($valor1, $valor2);
            $resultadoWAvg = w_average($valor1,$peso1, $valor2,$peso2);
            echo "<p> Para os valores <i>$valor1</i> e <i>$valor2</i>:</p>";
            echo "<ul><li> Média Aritmética = <strong>".number_format($resultadoAvg,2,",")."</strong></li>";
            echo "<li> Média Ponderada(Pesos <u>$peso1</u> e <u>$peso2</u>) = <strong>".number_format($resultadoWAvg,2,",")."</strong></li></ul>";
        ?>

    </section>
    
    
</body>
</html>