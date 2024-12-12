<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Raízes</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <?php
            $valor = $_POST["valor"] ?? 0;
            $raiz = $_POST["raiz"] ?? 2;
            $aux = $valor;

        ?>
        <h1>Calculando Raízes</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor">Valor</label>
            <input type="number" name="valor" value="<?= $valor ?>">
            <label for="raiz">Raiz</label>
            <input type="number" name="raiz" value="<?= $raiz ?>" min="2">
            <input type="submit" value="Calcular">  
        </form>
        <p><a href="http://localhost/cursophp/">Voltar</a></p>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            if($valor < 0 && $raiz %2 == 0){
                echo "<p>Não existe raiz par de números negativos!</p>";
            }
            else{
                if($valor < 0) $aux = -$aux;
                $resultado = pow($aux,(float)(1/$raiz));
                if($valor >= 0)echo "<p>Raiz $raiz de $valor = ".number_format($resultado,3,",")."</p>";
                else echo "<p>Raiz $raiz de $valor = ".number_format(-$resultado,3,",")."</p>";
            } 
        ?>

    </section>
    
    
</body>
</html>