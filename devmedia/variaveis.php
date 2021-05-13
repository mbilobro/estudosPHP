<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php

//Declaração das constantes
define( 'NOME', 'Alex Sander' ); //Declarada a constante NOME com o valor Alex Sander, do tipo String
define ('ALTURA', 1.76); //Declarada a constante ALTURA com o valor 1.76, do tipo float
define('ATIVO', true); //Declarada a constante ATIVO com o valor true, do tipo boolean

//Declaração da classe Empresa
class Empresa {
  const NOME_EMPRESA = 'DevMedia'; //Declarada a constante NOME_EMPRESA com o valor DevMedia, do tipo String
  const ANO = 2017; //Declarada a constante ANO com o valor 2007, do tipo int
}

echo __FILE__; //Impresso a constante mágica __FILE__ que exibirá o caminho completo do arquivo PHP utilizado
echo "<br>";
echo ATIVO;

/* = "Dev";
$variavel .= "Media! ";

$variavel2 = "Plataforma";
$variavel2 .= " para programadores!";
echo "<br>";
echo $variavel . $variavel2;

$num1 = 2;
$num2 = 4;
$num3 = 6;
$num4 = 8;

//Resultado igual a 3
$resposta1 = ++$num2 - $num1;
echo $resposta1;
echo "<br>";


//Resultado igual a 8
$resposta2 = --$num3 + $num1;
echo $resposta2;
echo "<br>";

//Resultado igual a 9
$resposta3 = --$num1 + $num4;
echo $resposta3;
echo "<br>";

$produto = "celular";
$valor = 1350.00;

echo "<br>";
echo "O " . $produto . " custa R$" . $valor . " reais";

$nome = 'Samuel';
$sobrenome = 'Rodrigues';

$nome_completo = $nome . ' ' . $sobrenome;

echo "<br>";
echo $nome_completo;

$var = 5;
$var2 = "10.5";
echo "<br>";

echo $var + $var2;

$a = 30;
$b = 20;

$soma = $a + $b;
$subtracao = $a - $b;



echo "A soma entre as variáveis é: " . $soma;
echo " ";
echo "A subtração entre as variáveis é: " . $subtracao;*/

/*$a = 10;
$b = 5;
$c = 3;
$teste = "teste123";
echo "<br>";
echo $teste;
echo "<br>";
$resultado = ($a + $c) * $b;

echo $resultado;*/

$a = 2;
$b = 6;
$c = 5;

$resultado = ( $a + $b ) * $c;
echo "<br>";
echo $resultado;

$num = 10;
$num += 5;
echo "<br>";

echo $num;

$modelo_nome = 'Alessandra Ambrósio';

echo $modelo_nome;


/* É impresso o valor 1, como ATIVO é do tipo boolean o PHP o
             converte o true para 1 e caso fosse false o valor seria 0 */
    /*//Variavel $nome recebe o valor “variavel”
    $nome = 'variavel';

    //Declaração da nova variável. O identificador será o conteúdo de $nome
    $$nome = 'DevMedia';

    //Exibe o conteúdo de $variavel
    echo $variavel;
    echo "<br>";

    define('Nome', 'Matheus Bilobrovec');
    define('Altura', 1.83);
    const ativo = true;

    class Estudante{
        const ra = 18011426;
        const sexo = 'masculino';
        const name = 'Bilo';
    }
    var_dump(Nome);
    echo "<br>";
    var_dump(Altura);
    echo "<br>";
    var_dump(Estudante::ra);
    echo "<br>";
    var_dump(Estudante::sexo);
    echo "<br>" . Estudante::sexo;
    echo "<br>" . Estudante::ra;
    echo "<br>" . Estudante::name;

function definir_max(){
    define("MAX", 10); //Criar constante dentro de uma função
}

definir_max();

echo MAX;*/
?>
</body>
</html>
