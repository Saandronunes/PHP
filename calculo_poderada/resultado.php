<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Aritmético</title>
</head>
<body>
    <h1>RESULTADO FINAL</h1>

<?php

    $nome = $_POST["nome"];

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];

    $soma = ($num1 + $num2 * 2 + $num3 * 3 + $num4 * 4)/4;

    echo"<p>Aluno: $nome </p>";
    echo "<p>Nota final $soma </p>";







?>
    
</body>
</html>