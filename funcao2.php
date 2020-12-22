<!Doctype html>
<html lang="pt-br">
<head>
    <title>Funções em PHP</title>
    <meta charset="utf-8">
    <meta name="description" content="Descrição do site">
    <meta name="keywords" content="Palavras chaves">
    <meta name="author" content="Romulo de Oliveira Azevedo">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>Chamada de função por arquivo externo</h1>
<?php

include("script.php");     // Caso de erro, o arquivo continua
// require_once("script.php");    // Caso de erro, o script para

echo "<h1>Testando novas funções</h1>";
ola();
echo "<hr>";
mostraValor(4);
echo "<hr>";

echo "<h2>Finalizando Programa...</h2>";



?>


</body>
</html>