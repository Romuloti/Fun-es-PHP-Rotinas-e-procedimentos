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
<h1>Funções para manipulação de números</h1>
<p>abs().: Valor absoluto</p>
<p>pow().: Potenciação</p>
<p>sqrt().: Raiz quadrada</p>
<p>round().: Arredondamento</p>
<p>intval().: Valor inteiro da variável</p>
<p>number_format().: Formatação</p>
<h2>sort($n) Ordenado Crescente, posição</h2> 
<h2>rsort($n) Ordenado  Descrecente, posição</h2> 
<h2>asort($n) Ordenado valores</h2>
<h2>arsort($n) Ordenado valores mantendo os indices</h2>
<h2>ksort($n) Ordenado as chaves, indices</h2>
<h2>krsort($n) Ordenado as chaves, indices, de tras para frente</h2>

<h3>Função str_replace = Substituição de palavra</h3>

<?php
$frase = "Gosto de estudar matemática!!!";
$novafrase = str_replace("matemática", "PHP", $frase);
$novafrase1 = str_ireplace("Matemática", "PHP", $frase);  // ignorando casesensitive
echo "$novafrase<br/>";
echo "$novafrase1";

?>

<h2>Função <u>strtolower</u> = Colocar tudo em minusculo</h2>

<?php
$nome = "Romulo de Oliveira Azevedo";
//$bnome2 = strtolower($nome);

print("Seu nome é: ".strtolower($nome));
// print("seu nomoe é $bnome2");

?>

<h2>Função <u>strtoupper</u> = Colocar tudo em Maisculo</h2>

<?php

$letra = "tudo em minusculo transformando em MAISCULO";
$nome = strtoupper($letra);

print("Transformando tudo para .: $nome");

?>

<h3>Funções ucfirst = Primeira Letra colocado em Miusculo</h3>

<?php
$texto = "gloria silvia de oliveira veloso";
$nome = ucfirst($texto);

echo $nome;

?>

<h3>ucwords = Corrigir Letras maisculas dos nomes</h3>
<?php
$texto = "gloria silvia de oliveira veloso";
$nome = ucwords($texto);

echo $nome;

?>
<h3>strrev = De tras para frente</h3>
<?php
$texto = "gloria silvia de oliveira veloso";
$nome = strrev($texto);

echo $nome;

?>
<h2>Função substr = Posição zero andar 5 letras</h2>

<?php
$texto = "Tudo que precisa saber sobre as funções";
$sub = substr($texto, 0, 5);
$duv = substr($texto, 8);
$tuv = substr($texto, -9);
$terr = substr($texto, -12, 4);

echo "$sub<br/>verificar o que vai fazer<br/>";
echo "$duv<br/>";
echo "$tuv<br/>";
echo "$terr";

?>
<h3>str_repeat = Repetir o dado quantidade de vezes</h3>

<?php
$nome = str_repeat("php", 8);
print("O texto gerado foi $nome");
print(str_repeat("-", 20));


?>

<h3>Função substr_count = Contar quantas vezes a string(palavra se repete na frase)</h3>

<?php

$texto = "Estou aprendendo PHP com curso de PHP na net de PHP";
$contar = substr_count($texto, "PHP");
echo $texto."<br/>";
print("PHP encontrado $contar vezes");

?>
<h3>strpos = contar a frase até chegar na palavra</h3>
<?php
$texto = "Sou profissional de PHP Fullstack";
$nome = strpos($texto, "PHP");

echo "$texto <br/> A string PHP encontra-se na posição, contando com espaço $nome";

?>

<h3>stripos = contar a frase até chegar na palavra ignorando usecase</h3>

<h3>Função <u>strlen</u> = Contar caraceter</h3>

<?php
$texto = "Curso de PHP<br/>";

$outro = "<br/>Sou programador front-end e back-end.";
$tamanho = strlen($texto);
$tamanho2 = strlen($outro);

echo $texto = "Curso em Video<br/>";
echo $tamanho."<br/>";
echo $outro = "Sou programador front-end e back-end.<br>";


echo $tamanho2;

?>
<h3>Função <u>trim</u> = Retirar espaço</h3>
<?php
$nome = " José da Silva  ";

$contagen = strlen($nome);
$nomeatual = trim($nome);

echo $contagen."<br/>";
echo $nomeatual." .: => Utilizando trim = Elimina espaços no início e no final";

$nomenovo = strlen($nomeatual);

echo "<br/>".$nomenovo." strlen conta a quantidade de caracter<br/>";
echo " ltrim = Elimina espaço do início.<br/>";
echo " rtrim = Elimina espaço do final.";

?>
<h3>Funções <u>str_word_count</u> = Contar palavras / 0123 -> Transformar em array</h3>

<?php
    $frase = "Eu vou estudar PHP";
    $count = str_word_count($frase, 0);  // 1 ou 2 e 3 Vira um array
    print($count);
    echo " = str_word_count .: Serve para contar palavras";
?>

<h3>Funções <u>explode</u> - Colocar palavras dentro de um array a cada espaço, mesma função do str_word_count($nome, 1)</h3>

<?php

$site = "Curso de PHP Romulo de Oliveira Azevedo";
$corrente = explode(" ", $site); 
print_r($corrente);
print_r("<br>".$corrente[2]);
print_r("<br>".$corrente[3]);
print_r("<br>".$corrente[4]);
print_r("<br>".$corrente[5]);

?>
<h3>Funções <u>implode() or join()</u> =  NÃO É VETOR = JUNTAR PALAVRAS DO ARRAY EM TEXTO</h3>

<?php

$fase[0] = "Curso";
$fase[1] = "de";
$fase[2] = "PHP";
$texto = implode(" ", $fase);

print($texto);

?>
<h3>Função chr(XX); = mostra que letra em código ASCI</h3>
<?php
$letra = chr(67);
echo "A letra chr de 67 é: $letra";
?>
<h3>Função ord(XX); = mostra o código em código ASCI</h3>
<?php
$letra = "C";
$cod = ord($letra);
echo "O código da Letra $letra é: $cod";
?>

<h3> Funções <u>str_split</u> = Cada letra dentro de um VETOR</h3>
<?php
$texto = "Este texto é para verificar função str_plit";
$conteudo = str_split($texto);

print_r($conteudo);
?>

<h2>Funções para manipulação de string 25 Funções</h2>

<p>%d .: Valor decimal (Positivo ou negativo)</p>
<p>%u .: Valor decimal sem sinal (apenas positivos)</p>
<p>%f .: Valor real</p>
<p>%s .: String</p>

<?php
echo "<br>$ prod = 'Leite'";
echo "<br>$ preco = 4.5";
echo "<br>printf('O %s está custando R$ %.2f', $ prod, $ preco)";

echo "<hr>";

$prod = "Leite";
$preco = 4.5;

printf("O %s está custando R$ %.2f", $prod, $preco);

echo "<hr>";

echo "$ prod = 'Leite'<br>";
echo "$ pr = 4.5<br>";

echo "echo('O $ prod custa '.number_format($ pr,2))<br>";
echo "<br>";
$prod = "Leite";
$pr = 4.5;

printf("O $prod custa ".number_format($pr,2));

?>


<h2>print_r()</h2>
<h2>var_dump()</h2>
<h2>var_export()</h2>
<?php

$x [0]= 4; 
$x [1]= 3; 
$x [2]= 8;

echo "<pre>";
print_r($x);
echo "</pre>";

$array = array(
   0 => "zero",
   1 => "primeiro",
   2 => "segundo",
   3 => "terceiro",
   4 => "quarto",
   5 => "quinto"
);
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<hr>";

$array = [1, 2, 3, 4];
$array1 = array(5, 6, 7, 8, 9);

echo "<pre>";
var_dump($array);
echo "</pre>";
echo "<hr>";

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";
var_dump($array1);
print_r($array1);

echo "<hr>";

$teste = [
    "nome" => 0,
    "sobrenome" => 1,
    "ende" => 2,
    "cep" => 3,
    "est" => 4
];
echo "<pre>";
print_r($teste);
echo "</pre>";

echo "<hr>";

$array1 = array(5, 6, 7, 8, 9);

var_dump($array1); echo "Var dump";

echo "<hr>";

var_export($array1);  echo "Var export";

echo "<hr>";

print_r($array1);  echo "print_r<br>";

$txt = "Este é um exemplo de string gigante que .................";
$res = ($txt);

echo $res."1";

echo "<hr>";

$res = $txt;

echo $res."2";

echo "<hr>";

$res = wordwrap($txt, 15, true);

echo $res."3, quebra de texto, wordwrap = Quebrar palavras";
echo "<hr>";

$res = wordwrap($txt, 8, "<br/>\n");

echo $res."4, quebra de texto e no servidor";

echo "<hr>";

$res = wordwrap($txt, 10);

echo $res."5, quebra de texto";

?>

<h3>str_pad = espaço direta, centralizado, ou esquerda</h3>
<?php
$nome = "Romulo de Oliveira Azevedo";
$texto = str_pad($nome, 30," ", STR_PAD_RIGHT);
// $boss = str_pad($nome, 30," ", STR_PAD_CENTER);
$uol = str_pad($nome, 30," ", STR_PAD_LEFT);

print("Eu me chamado $texto e sou lindo!<br/>");
print("Eu me chamado $boss e sou lindo!<br/>");
print("Eu me chamado $uol e sou lindo!");

?>
<h3><hr></h3>
<?php

$c = range(5, 20, 2);
foreach($c as $valor){
    echo "$valor ";

}

?>
<pre>
<table border="1"><tr>
    <?php
        $c = range(5, 20, 2);
        foreach($c as $key => $valor){
            echo "<td>$valor ";

        }
    ?>
</table>
</pre>
<hr>
<pre>
<table border="1"><tr>
    <?php
        $c = array(
            1 => "A",
            3 => "B",
            6 => "C",
            8 => "D",
            9 => "F",
            10 => "G",
            11 => "H",
            12 => "I"
    );
        $c[13] = "J";  // Adicionando o indice 13 = J
        unset($c[1]);  // Apagando o indice 1 = A
        foreach($c as $key => $valor){
            echo "<td>$valor ";

        }
    ?>

</table>
</pre>

<?php

$cad = array(
    "nome" => "Romulo",
    "idade" => 37,
    "peso" => 78.5,
    "sobre" => "Azevedo"

);
echo "<pre>";
print_r($cad);
echo "</pre>";
?>

<table border="1"><tr>
<?php

foreach($cad as $key => $valor){    
    echo "<td> $valor";

}
?>
</tr>
</table>

</body>
</html>