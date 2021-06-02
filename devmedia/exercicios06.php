<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php
// 01

    $var = "Aaron";
    $var = substr_replace($var, " Greenberg", strlen($var));

    echo strtoupper($var);

//02

    $usuario = 'Douglas Santos';
    $nome = substr($usuario, 0, 7);
    if ($nome == 'Douglas'){
        echo "<br>";
        echo $nome;
    }else{
        echo "<br>";
        echo "Nome incorreto";
    }

//03

    $var_1 = '73';
    $var_2 = 73;

    $var_2 = $var_2;

    if ($var_1 === $var_2) {
        echo "<br>";
        print ('As variáveis são iguais');

    } else{
        echo "<br>";
        print ('São diferentes');
    }

//04

$valorGuardado = 5;
$dia = 1;

    while($dia <= 7) {

        $valorGuardado *= 2;
        if ($valorGuardado > 100){
            $valorGuardado = $valorGuardado - $valorGuardado * 0.2;
        }
        $dia ++;
    }
echo "<br>";
echo "Valor guardado: $valorGuardado reais";

//05

    function retornaTotalPares()
    {
    $x = 1;
    $pares = 0;

        while ($x < 10){
            if ($x % 2 == 0)
                {
                    $pares++;
                }
                $x++;
            }
            echo "<br>";
            echo $pares;
    }
retornaTotalPares();

//06

$sequencia = '11000000011101';
$numerosZero = 0;
$numerosUm = 0;

$tamanho = strlen($sequencia);
for ($indice = 0; $indice < $tamanho ; $indice++) {
    switch ($sequencia[$indice]){

    case '0':
        $numerosZero++;
        break;
        case '1':
        $numerosUm++;
        break;
    }
}

echo "<br>";
echo "Total 0 : $numerosZero | Total 1 : $numerosUm";


//07

    $indice = 0;
    $texto = 'carro  velho';
    $tamanho_texto = strlen ($texto);


    while( $texto[$indice] != 'h') {

        $indice ++;
    }
    echo "<br>";

    echo "O número de caracteres é: $indice";

//08

function retangulo($base, $altura){
    $area = $base*$altura;
    return $area;
}

$valorArea = retangulo(6,6);

echo "<br>";
echo "Area é igual a: $valorArea";

//09

    define ('LIMITE', 50);

    $valorInicial = 10;
    $valorBase = 3;

    while ($valorInicial <= LIMITE) {

        $resultado = $valorInicial % $valorBase;

        if  ($resultado == 0) {
            echo "<br>";
            echo "$valorInicial é múltiplo de $valorBase";
        }
        $valorInicial++;
    }

//10

    $texto = 'Palhaço';

    $trecho_1 = substr($texto, 0,1);

    $trecho_2 = substr($texto, 3,1);

    $trecho_3 = substr($texto, 0,1);
    echo "<br>";
    echo $trecho_1,$trecho_2,$trecho_3;

//11

$pitStop = 0;
$totalVoltas = 55;

for($voltas = 0; $voltas <= $totalVoltas; $voltas++) {

    if ( $voltas > 0 && $voltas < $totalVoltas && $voltas % 5 == 0 )  {
        $pitStop++;
    }
}
echo "<br>";
echo "Foram feitos $pitStop pit stops durante a corrida";


//12

    $nome = "Cliff Bleszinski";
    $nome = substr($nome, 6, strlen($nome) - 1);
    echo "<br>";
    echo $nome;

//13

$ValorFinal = 23;
$valorInicial = 9;
$numerosPares = 0;
$numerosImpares = 0;

while ( $valorInicial<= $ValorFinal) {

    if ($valorInicial % 2 == 0) {
        $numerosPares++;
    } else {
        $numerosImpares++;
    }
    $valorInicial++;
}
if($numerosPares > $numerosImpares){
    echo "<br>";
    echo "Números pares são maiores";
} else {
    echo "<br>";
    echo "Números ímpares são maiores";
}

//14

    $nivelMinimo = 3;
    $mostraMsg = false;
    $msg = "Power your dreams!";

    $acesso = 4;

    if ($acesso >= $nivelMinimo) {
        $mostraMsg = true;
    }
    if ($mostraMsg) {
        echo "<br>";
        echo $msg;
    }

//15

    function converter($temperaturaEmCelsius) {
        $kelvin = $temperaturaEmCelsius + 273;
        $fahrenheit = 1.8 * $temperaturaEmCelsius + 32;
        echo "<br>";
        echo "${temperaturaEmCelsius}ºc equivale a ${kelvin}K e ${fahrenheit}ºF";
    }
    $celsius = 35;
    converter($celsius);

//16

function
calcularIMC ($peso, $altura){
    $imc = $peso / ($altura * $altura);

    if ($imc > 25) {
        $imcIdeal = $imc - 24.99;
        $perdaPeso = $imcIdeal * ($altura * $altura);
        echo "<br>";
        echo "Com $peso Kg é necessário perder $perdaPeso Kg";
    } else {
        echo "<br>";
        echo "$peso Kg esta dentro do peso ideal";
    }
}

$peso = 75.000;
$altura = 1.70;

calcularIMC ($peso, $altura);

//17

    function calcular_idade($anoNascimento, $anoAtual){
    $idade = $anoAtual - $anoNascimento;

    if($idade < 16) {
        $anoVotacao = $anoNascimento + 16;
        echo "<br>";
        echo "Não tem idade mínima para votar, somente em $anoVotacao";
    }else{
        echo "<br>";
        echo "Já tem idade para votar";
        }
    }

    $anoNascimento  = 2009;
    $anoAtual = 2015;

    calcular_idade($anoNascimento, $anoAtual);

//18

    $total_espacos = 0;

    $texto = '   We are the champion    ';

    $tamanho_texto = strlen($texto);

    $i = 0;

    while( $i < $tamanho_texto) {
        $caractere = $texto[$i];
        if ($texto[$i] == ' ') {
            $total_espacos++;
        }
        $i++;
    }

    echo "<br>";
    echo "Total de espaços em branco: $total_espacos";

//19

    function acrescimo($valor){

        $iof = .5;
        $cambio = 5;

        $valor *= $iof;
        $valor += $cambio;

        echo "<br>";
        return $valor;
    }

    $valor_pagamento = 10.0;
    $total = acrescimo($valor_pagamento);

    switch($total) {

        case 10:
            echo "É igual a 10";
            break;

        default:
            echo "<br>";
            echo "Não é igual a 10";
            break;
    }

//20

$texto = ' notebook ';

$texto = trim($texto);

$tamanho = substr($texto, 3, 6);

echo "<br>";
echo strlen($tamanho);

//21

$frase = "Plataforma para programadores";
echo "<br>";
echo ucwords($frase);

//22

    $employee = " Dona Sarkar ";

    $employee = substr(substr_replace(trim($employee), ".", 1, 4), 0,2)
        . substr($employee, 5, strlen($employee) - 2);
    echo "<br>";
    echo trim(strlen($employee));

//23

$conta1 = '888-9';
$conta2 = '9-8';

    function recupera_digito($conta) {
        $i = 0;
        while ($i < strlen($conta)){
            if ($conta[$i] === '-') {
                return $conta[++$i];
            }
            $i++;
        }
    }
    echo "<br>";
    echo recupera_digito($conta1);
    echo "<br>";
    echo recupera_digito($conta2);

//24

$data = '08/06/1995';

$mesNascimento = substr($data, 3, 2);
echo "<br>";
echo <<<SHOW
O mês de nascimento é: $mesNascimento
SHOW;

//25

function retornaCinco()
{
    $numero = 3;

    switch ($numero)
    {
        case 0:
            return 0;
            break;
        case 1:
            return 1;
            break;
        case 2:
            return 2;
            break;
        default:
           return 5;
    }
}
echo "<br>";
echo retornaCinco();

//26

    $votou_primeiro_turno = false;
    $votou_segundo_turno = true;
    $idade = 26;

    if ($votou_primeiro_turno || $votou_segundo_turno) {


        if ($idade < 18 || $idade > 70) {
            echo "<br>";
            echo 'Não precisa justificar';

        }
        else {
            echo "<br>";
            echo 'Precisa justificar';
        }
    }

//27

$nome = 'Panos Panay';
echo "<br>";
echo <<<HDOC
    $nome
HDOC;

//28

    define ('TOTALPONTOS', 54);

    $arremesso = 1;
    $cesta3pontos = 0;
    $cestas = 0;

    while( $cestas < TOTALPONTOS) {

        if ($arremesso % 4 == 0) {
            $cestas += 3;
            $cesta3pontos++;
        } else {
            $cestas += 2;
        }
        $arremesso++;
    }
    echo "<br>";
    echo "Cestas de 3 pontos: $cesta3pontos";

//29

function soma($x, $y){
    return $x + $y;
}
echo "<br>";
echo soma(2, 3);

//30

    $telefone = '9547898 ';
    $qntDigitos = strlen($telefone);
    $espacoVazio = 0;
    $caractereEspecial = 0;

    if($qntDigitos == 9 && $telefone[0] == '9') {

        for ($indice = 1; $indice < $qntDigitos; $indice++) {

            switch ($telefone[$indice]) {
                case ' ':
                    $espacoVazio++;
                    break;

                case '-':
                    $caractereEspecial++;
                    break;
            }
        }

    if ($espacoVazio > 0 || $caractereEspecial > 0) {
            echo "<br>";
            echo "Presença de caractere especial ou espaço em branco";
    }else{
          echo "<br>";
          echo "Número válido";
    }}
    else{
        echo "<br>";
        echo "Número invalido";
    }

//31
function calculo($x, $y){

    if($x > $y){
        $resultado = $x + $y;
    }
    else
    {
        $resultado = $x * $y;
    }
    return $resultado;
}
echo "<br>";
echo calculo(10,5);

//32

$nome = 'Rod Fergusson';
$nome = str_replace($nome, "Cliff Bleszinski", $nome);
echo "<br>";
echo <<<'BR'

$nome

BR;
?>

</body>
</html>