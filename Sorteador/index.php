<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinando formularios</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <h1>Sorteador</h1>
    </header>
    <main>
        <h3>Gere valores aleatórios</h3>
        <button onclick="javascript:document.location.reload()">🔃Gerar valor</button>
        <?php 
            $valor = mt_rand(0,100);
            echo "<p>Valor gerado: <strong>$valor</strong>";
        ?>
        <p><a href="http://localhost/cursophp/">Voltar</a></p>
    </main>
    
</body>
</html>