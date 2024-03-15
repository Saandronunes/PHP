<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salario e comissão</title>
</head>
<body>
    <?php
    
    $nome=$_POST["nome"];
    $sal = $_POST["sal"];
    $vend = $_POST["vend"];

        $result = $vend * 0.15 + $sal;

        echo "<p>Vendedor: $nome  </p>";

    ?>
    
</body>
</html>