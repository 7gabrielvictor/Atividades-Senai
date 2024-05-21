<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ordem.css">
    <title>Ordem decrescente</title>
</head>
<body>
    <h1>Ordem decrescente</h1>
    <form action="ordem.php">

    <input type="number" name="numero1" id="numero1" placeholder="Digite o primeiro número:" required>
    <input type="number" name="numero2" id="numero2" placeholder="Digite o segundo número:" required>
    <input type="number" name="numero3" id="numero3" placeholder="Digite o terceiro número:" required>
    <input type="submit" value="Enviar">

    </form>
</body>
<?php

$n1 = $_GET ['numero1'];
$n2 = $_GET ['numero2']; 
$n3 = $_GET ['numero3'];

$numeros = array($n1, $n2, $n3);

rsort($numeros);

echo "A ordem decrescente dos números é:<br>";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
?>
<hr>
  Desenvolvido por Gabriel Victor ®️
<style>
    input{
    display: flex;   
    margin-bottom: 2%;
    width: 15%;
    padding: 10px;
}
hr{
    width: 20%;
    margin-top: 5%;
    margin-left: 0;
}
</style>
</html>