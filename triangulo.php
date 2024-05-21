<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="triangulos.css">
    <title>Classificação de Triângulo</title>
</head>
<body>
    <h1>Classificação de Triângulo</h1>
    <form action="" method="get">

       
        <input type="number" id="lado1" name="lado1" required placeholder="Digite o Lado 1 do seu triângulo">
        <input type="number" id="lado2" name="lado2" required placeholder="Digite o Lado 2 do seu triângulo">
        <input type="number" id="lado3" name="lado3" required placeholder="Digite o Lado 3 do seu triângulo">
        <button type="submit">Classificar</button>
    </form>

    <?php

        $lado1 = $_GET['lado1'];
        $lado2 = $_GET['lado2'];
        $lado3 = $_GET['lado3'];

        function classificarTriangulo($l1, $l2, $l3) {
            if ($l1 == $l2 && $l2 == $l3) {
                return "Equilátero";
            } elseif ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
                return "Isósceles";
            } else {
                return "Escaleno";
            }
        }

        if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
            $classificacao = classificarTriangulo($lado1, $lado2, $lado3);
            echo "Os lados $lado1, $lado2 e $lado3 formam um triângulo $classificacao.";
        } else {
            echo "Os lados fornecidos não formam um triângulo válido.";
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