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
<h3>Função que retorna valor = procedimento</h3>
<?php
function soma($a, $b){

    $s = $a + $b;
    echo "A soma vale.: $s<br/>";

}

soma(5, 3);
soma(10, 5);
soma(20, 20);

$x = 30;
$y = 20;
soma($x, $y);

?>

<h3>Função Retorna valor</h3>

<?php
function mais($a, $b){

    $s = $a + $b;
    return $s;

}

$res = mais(3, 7);

echo $res."<br/>";

$x = 3;
$y = 5;
$r = mais($x + $y); 

echo "A soma entre $x e $y é igual a $r";


?>






</body>
</html>