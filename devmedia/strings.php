<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php
$nome = 'João';
$sobrenome = 'Silva';

//Impressão das duas variáveis
echo "$nome $sobrenome";

//Erro ao executar
print ("<br>");
print ($nome . " " . $sobrenome);

//Comandos válidos
print ("<br>");
print ($nome . " ");
print ($sobrenome);

$nome = 'PHP';

//Será impressa string
echo "<br>";
echo <<<A
Minha linguagem favorita é $nome //o valor da variável será impresso
A;

$nome = 'PHP';

echo "<br>";
//Será impressa a string definida
echo <<<'ABC'
Minha linguagem favorita é o $nome //o valor da variável não será impresso
ABC;

$nome = 'PHP';
echo "<br>";
echo "${nome} é a minha linguagem favorita";

$nome = 'PHP';
echo "<br>";
echo "{$nome} é a minha linguagem favorita";

$nome = 'PHP';

//Acesso ao primeiro caractere da variável nome
$primeiro_caractere = $nome[0];

//Modificação da variável nome
$nome[0] = 'M';
$nome[1] = 'V';
$nome[2] = 'C';

echo "<br>";
echo $nome;
echo $primeiro_caractere;

// Funções para Manipulação de Strings

$nome = 'linguagem para alunos que necessitam de orientacao especial';
$nome_2 = ' Linguagem Java ';

//será impressa a quantidade de caracteres da string (13)
echo "<br>";
echo strlen($nome);

//Converte o primeiro caractere de cada palavra para maiúsculo
echo "<br>";
echo ucwords($nome);

//Converte o primeiro caractere para maiúsculo
echo "<br>";
echo ucfirst($nome);

//Converte a string para minúscula
echo "<br>";
echo strtolower($nome);

//Converte a string para maiúscula
echo "<br>";
echo strtoupper($nome);

//Substitui a string Linguagem pela string Amo
echo "<br>";
echo str_replace('Linguagem', 'Amo', $nome_2);

//Insere na primeira posição da string os caracteres PHP
echo "<br>";
echo substr_replace($nome, 'PHP ', 0, 0);

//Será retornada parte da string
echo "<br>";
echo substr($nome, 0, 10);

//Retira o espaço no início e no final de uma string
echo "<br>";
echo trim($nome_2);

echo "<br>";
echo substr_replace("CARRO", "CASA", 0);

$var = 15;

//O valor de $var é convertido para string
$var_2 = (string)$var;

echo "<br>";
var_dump($var_2);
?>
</body>
</html>
