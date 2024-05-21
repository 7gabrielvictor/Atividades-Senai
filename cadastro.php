<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>

    <form action="" method="get">
    <input type="text" name="nome" id="name" placeholder="Digite seu nome:" required>
    <input type="number" name="idade" id="idade" placeholder="Digite sua idade:" required>
    <label for="genero">Escolha seu gênero: </label> 

    <select name="genero" id="genero">
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="nao">Prefiro não dizer</option>
    </select>
    <br>
    <input type="submit" value="Enviar" id=enviar>
    </form>

    <?php

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $genero = $_GET['genero'];

    
    if($idade < 25 and $genero = 'feminino'){

        echo "<br><br>$nome, ACEITA!<br>";
    }
    else{

        echo "<br><br>$nome, NÃO ACEITA!<br>";
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
#enviar{
    margin-top: 2%;
}
</style>
</html>