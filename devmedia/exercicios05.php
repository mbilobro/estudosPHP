<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php
//Primeiro exercicio
/*
$destaque = false;
$msg = "Urgente: Nvidia anuncia novas RTX 30";

if ($destaque){
    echo strtoupper($msg);
} else {
    echo ucwords($msg);
}

//Segundo exercicio

$texto = "Faltam três dias para o lançamento";
echo "<br>";
echo str_replace("três" , 3, $texto);

//Terceiro Exercicio

$linguagem = 'C#';

echo "<br>";
echo <<<LINGUAGEM
Você escolheu a linguagem $linguagem
LINGUAGEM;

//Quarto Exercicio

$titulo = "Plataforma DevMedia";
echo "<br>";
echo substr($titulo, 11, 8 );

//Quinto Exercicio
$canal = 'Linus Tech Tips';
echo "<br>";
echo <<<CANAL
Você está assistindo $canal
CANAL;

//Sexto Exercício
 $mensagem = "O novo dispositivo da Microsoft se chama Surface";
echo "<br>";
echo str_replace("Surface", "Surface Duo", $mensagem);

//Setimo Exercicio

$musica = 'Mabataki';
echo "<br>";
echo <<<'SONG'
Você está escutando $musica através da variável $musica?
SONG;

//Oitavo Exercicio
$rg = 112345556;

if(strlen($rg) == 9){
    echo "<br>";
    echo "RG válido";
}else{
    echo "<br>";
    echo "RG inválido";
}

// Nono exercicio
$gamertag = "eduscxbox";

if($gamertag == eduscxbox) {
    echo "Gamertag correta";
} else {
    echo "Gamertag incorreta";
}

// Decimo exercicio
    $nome = "Marcus";
    $greeting = "Bom dia, $nome";
    echo "<br>";
    echo $greeting;

// Decimo primeiro exercicio

    $sigla = 'FBI';
    $sigla[2] = 'C';
    echo "<br>";
    echo "$sigla";

// Decimo segundo exercicio

    $nome = "Joanna Dark";
    echo "<br>";
    echo "Seu nome é: $nome";

// Decimo terceiro exercicio

    $resposta_certa = false;

    if($resposta_certa === true){
        $mensagem = "Você ganhou";
        echo "<br>";
        $mensagem = str_replace('ganhou', 'acertou', $mensagem);
    } else{
        $mensagem = "Você perdeu";
        echo "<br>";
        $mensagem = str_replace('perdeu', 'errou', $mensagem);

    }
    echo "<br>";
    echo $mensagem;*/

// Decimo quarto exercicio
    $nome = "Matheus";
    $nome = "Nome: ".$nome;
    $nome = strtoupper($nome);
    echo "<br>";
    echo $nome;

// Decimo quinto exercicio
    $mensagem = "Venha ver o seu novo veículo";
    echo "<br>";
    echo str_replace('veículo', 'carro', $mensagem);

// Decimo sexto exercicio
    $code = 'PPP';
    $code[1] = 'H';
    echo "<br>";
    echo $code;

// Decimo setimo exercicio

$nome = "juli";
if (strlen($nome) >= 5){
    echo "<br>";
    echo strtoupper($nome);
} else{
    echo "<br>";
    echo ucfirst($nome);
}
// Decimo setimo exercicio

$nome = "Júlia";
$greeting = "Bom dia, $nome";
echo "<br>";
echo $greeting;

// Decimo setimo exercicio

$sigla = 'FBI';
$sigla_b = 'FBC';

echo $sigla , $sigla_b;

?>
</body>
</html>
