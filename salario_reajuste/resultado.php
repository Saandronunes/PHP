<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>RESULTADO</h1>
    <?php 
        $nome = $_POST["nome"];
        $valor = $_POST["valor"];
        
        $result = $valor + $valor * 0.10;

        echo "<p> O valor com reajuste de salário é : $result</p>"

    ?>
    
</body>
</html>