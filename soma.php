
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de 2 Números Com Condições</title>
    </form>
</head>
<body>
    <h1>Soma</h1>
    <form action="soma.php">

    <input type="number" name="numero1" id="numero1" placeholder="Digite o primeiro número:" required>
    <input type="number" name="numero2" id="numero2" placeholder="Digite o segundo número:" required>
    <input type="submit" value="Calcular">

    </form>
</body>

    <?php
        $n1 = $_GET ['numero1'];
        $n2 = $_GET ['numero2'];

        $soma = $n1 + $n2;

        if ($soma > 20) {
           $soma +=8;
           echo "A soma dos números é: $soma";
        } else {
            $soma -=5;
            echo "A soma dos números é: $soma";
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