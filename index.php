<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1> Aula 001 de PHP</h1>
    <hr>
    <?php
    echo "<h2>Variável</h2>";
    $nome= "Gustavo";
    $idade = 17;
    $fumante = false;
    echo "nome: ". $nome . "<br>";
    echo "idade: " .$idade . "<br>";
    echo "fumante: ";
    //estrutura de decisão IF (SE)
    if($fumante == true){
        //verdadeiro
        echo "sim";
    }else{
        //falso
        echo "não";
    }
    ?>
</body>
</html>