<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Divisor</title>
</head>
<body>
        
        
    <form action="" method="get">

        <h1>Divisor</h1>

            <input type="number" id="numero" name="numero" step="1" required placeholder="Insira um número:">

            <input type="submit" value="Calcular">

    </form>  
    
    <?php

        if(isset($_GET['numero'])) {
            
            $numero = $_GET['numero'];
            
            if ($numero % 10 == 0) {
                echo "O número $numero é divisível por 10.";

            } elseif ($numero % 5 == 0) {
                echo "O número $numero é divisível por 5.";

            } elseif ($numero % 2 == 0) {
                echo "O número $numero é divisível por 2.";

            } else {
                echo "O número $numero não é divisível por 10, 5 ou 2.";

            }
        }
    ?>
        <hr>
    Desenvolvido por Gabriel Victor ®️
</body>
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