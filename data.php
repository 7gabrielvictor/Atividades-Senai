<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="data.css">
    <title>Data</title>
</head>
<body>
    <h1>Data</h1>

    <form action="data.php" method="get">

    <input type="number" name="mes" id="mes" placeholder="Digite o número do mês:" required>
    <br><br>
    <input type="submit" value="Enviar">

    </form>

<?php 

    if (isset($_GET['mes'])) {
        $numero = $_GET['mes'];
        
        $meses = array(
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        );
        
        if ($numero >= 1 && $numero <= 12) {
            echo "<p>O mês do número $numero é: " . $meses[$numero];
        }
        else{
            echo "O mês equivalente a esse número não existe!";
        }
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

</body>
</html>