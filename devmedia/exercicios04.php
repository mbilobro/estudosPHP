<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php
//Primeiro
$candicado1_mat = 8.5;
$candicado1_port = 9.5;

$candicado2_port = 9.5;
$candicado2_mat = 9.5;

if ($candicado1_port != $candicado2_port) {
    if ($candicado1_port > $candicado2_port) {
        echo "Candidato 1 aprovado - Nota de portugues maior";
    } else {
        echo "Candidato 2 aprovado - Nota de portugues maior";
    }

} elseif ($candicado1_mat != $candicado2_mat){
    if ($candicado1_mat > $candicado2_mat){
        echo "Candidato 1 aprovado - Nota de matemática maior";
    } else {
        echo "Candidato 2 aprovado - Nota de matemática maior";
    }
}

// Segundo
 $aprovado = aprovacao(7, 8);

    if ($aprovado == true){
        echo "<br>";
        echo "Aprovado";
    } else{
        echo "<br>";
        echo "Reprovado";
    }

    function aprovacao($nota, $media){
        return $nota >= $media;
    }
    // Terceiro
$preco_item = 1.50;

function total(){

    $item = 10;
    global $preco_item;

    $valor_total = $item * $preco_item;

    return $valor_total;
}
echo "<br>";
echo total();

//Quarto

    $var = "João";
    $var .= " da Silva";
    echo "<br>";
    echo $var;
//Quinto

    $tanque = 40.0;
    $consumo = 5;

    for ($voltas = 0; $voltas < 5; $voltas++){
        $tanque -= $consumo;
    }
    echo "<br>";
    echo $tanque;

//Sexto

    $var = 'Devmedia';

    $$var = 'Plataforma para programadores';

    echo "<br>";
    echo $Devmedia;

//Setimo

    $x = 10;
    $y = 5 ;

    if($x > $y){
        $y = 20;
        if($x < $y){
            echo "<br>";
            echo "Este é o PHP";
        }
    }

//Oitavo
    $x = 0;
    $y = 0;

    $direcaoX = 1;
    $direcaoY = 1;

    $largura = 800;
    $altura = 600;

    $frame = 0;

    /*while ($frame < 1000) {
        if ($x >= $largura) {
            $direcaoX *= -1;
        } elseif ($x <= 0) {
            $direcaoX *= 1;
        }
        if ($y >= $altura) {
            $direcaoY *= -1;
        } elseif ($y <= 0) {
            $direcaoY *= 1;
        }

        $x += $direcaoX;
        $y += $direcaoY;

        desenha($x, $y);
        $frame++;
    }

    function desenha ($x, $y)
    {
        echo "<br>";
        echo "$x $y";
    }*/

// Nono
    const MEDIA_APROVACAO = 6.0;
    $nota = 6.0;
    $nota += 7.5;
    $nota += 6.5;
    $nota /= 3;

    if ($nota >= MEDIA_APROVACAO){
        echo "<br>";
        echo "Aprovado";
    } else {
        echo "<br>";
        echo "Reprovado";
    }

// Décimo

$numero_1 = 4;
$numero_2 = 5;

do {

    $soma = $numero_1 + $numero_2;

    ++$numero_1;
    ++$numero_2;

} while ($soma <= 9);

echo "<br>";
echo $soma;

// Décimo Primeiro

    $valorTotal = 199.25;
    $pagantes = 3;

    for ($i = 0; $i < $pagantes; $i ++){
        echo "<br>";
        echo "Pagamento $i";
        pagar($valorTotal / $pagantes);
    }

    function pagar($valor){
        echo "<br>";
        echo "Valor pago " . number_format($valor, 2, ",", ".");
    }

// Décimo Segundo

    define('X', 8);

    $y = 7;
    $w = 3;
    $z = 2;

    $z *= X;
    $z -= $y;
    $z /= $w;

    echo "<br>";
    echo $z;

//Décimo Terceiro
    define('booleano', true);

    $variavel = booleano;
    $$variavel = 'variavel';
    echo "<br>";
    echo $variavel;

// Décimo Quarto
    $var_texto = "19.5";
    $var_numero = 15;

    echo "<br>";
    echo $var_texto - $var_numero;

//Décimo Quinto

    $preco = 20000;
    $numero_parcelas = 10;
    $desconto = 1500;
    $valor_juros = 50;

    $total = $preco + $numero_parcelas * $valor_juros - $desconto;

    echo "<br>";
    echo $total;

//Décimo Sexto

    $variavel_1 = 3.7;
    $variavel_2 = 4.6;

    echo "<br>";
    echo $variavel_1 < $variavel_2 ? "$variavel_2 é maior" : "$variavel_1 é maior";

//Décimo Sétimo

    $var_1 = 8.0;
    $var_2 = 4;
    $var_3 = 10;

    $calculo_1 = $var_1 / $var_2++;
    $calculo_2 = $var_3 / $var_2++;

    if ($calculo_1 === $calculo_2) {
        ++$var_2;
    } else {
        --$var_2;
    }
    echo "<br>";
    echo $var_2;

//Décimo Oitavo

    function TorreDeHanoi ($discos, $pino1, $pino2, $pino3){
        if ($discos == 1) {
            echo "<br>";
            echo "Movendo o disco $discos do pino $pino1 para o pino $pino2";
            return;
        }

      torreDeHanoi ($discos - 1, $pino1, $pino3, $pino2);
      echo "<br>";
      echo "Movendo o disco $discos do pino $pino1 para o pino $pino2";
      torreDeHanoi  ($discos - 1, $pino3, $pino2, $pino1);

    }

    $discos = 4;
    torredeHanoi ($discos, 'A', 'C', 'B');

// Décimo Nono

    $var1 = 4;
    $var2 = 2.0;

    $resultado1 = $var1 / $var2;
    echo "<br>";
    var_dump($resultado1);

 // Viségimo

    $num = 10;
    $pares = 0;
    $i = 0;

    while ($i <= $num){
        if ($i % 7 == 0){
            $pares++;
        }
        $i++;
    }
    echo "<br>";
    echo $pares;

// Vigésimo Primeiro

    $val1 = "10";
    $val2 = 10;

    echo "<br>";
    echo $val1 == $val2;

    $val1 = "";
    $val2 = false;

    echo "<br>";
    echo $val1 == $val2;

    $val1 = "false";
    $val2 = true;

    echo "<br>";
    echo $val1 == $val2;

// Vigésimo Segundo

    const maiorIdade = true;

    $idade = 0;

    if(maiorIdade) {
        $idade = 20;
    }else {
        $idade = 13;
    }
    echo "<br>";
    echo $idade + 5;

// Vigésimo Terceiro

    function calcula_idade($ano_atual  = 2019, $nascimento = 1986){
        $idade = $ano_atual - $nascimento;
        return $idade;
    }

    echo "<br>";
    echo calcula_idade();

// Vigésimo Terceiro
    echo "<br>";
    echo 1 + "10" * 2;

// Vigésimo Quarto

    $var1 = 'nome';
    $var2 = 'sobrenome';

    $$var1 = 'João ';
    echo "<br>";
    echo $nome;

    $$var2 = 'Silva';
    echo $sobrenome;

// Vigésimo Quinto

$mes = 1;
$pagamento = 0.0;
$saldo = 0.0;

while ($mes <= 12){
    $pagamento += 500;

    if ($mes % 3 == 0 ){
        $pagamento += $pagamento * 0.1;
    }
    $saldo += $pagamento;
    $pagamento = 0;
    $mes ++;
}

echo "<br>";
echo $saldo;


// Vigésimo Sexto

const percentual = 0.005;

$valor = 353.6;

echo "<br>";
echo bonus ($valor, percentual);

function bonus ($valor, $percentual){
    return $valor * $percentual;
}

// Vigésimo Sétimo

$entrada = 14.99;

$meia = true;

$valor = 0;

if($meia){
    $valor = $entrada / 2;
}

echo "<br>";
echo $valor;

// Vigésimo Oitavo
function quadrado (&$valor){
    $valor *= $valor;
}

$numero = 7;

quadrado($numero);

echo "<br>";
echo $numero;

//Vigésimo Nono

$ativo = false;
$idCargo = 1;

if ($ativo == true && $idCargo == 1) {
    echo "<br>";
    echo "Acesso negado";
} else if (!$ativo) {
    echo "<br>";
    echo "Usuário inativo";
}

//Trigésimo

    $var1 = 2;
    $var2 = 4;
    $var3 = 6;

    $operacao = $var2-- + $var1;
    $operacao = $var2 * ++$var3;

    echo "<br>";
    echo $operacao;

//Trigésimo primeiro

    $possui_gas = true;
    $numero_multas = 0;
    $valor_seguro = 1200;

    if ($possui_gas && $numero_multas === 0) {
        $valor_seguro -= 500;
    }
    echo "<br>";
    echo $valor_seguro;

// Trigesimo segundo

$var1 = false;
$var2 = true;
$var3 = false;
echo "<br>";

if ($var2 or $var3) {

    $var4 = "Linguagem";
} else {
    $var4 = "Tecnologia";
}
if (!$var1 && $var2) {
    $var4 .= " PHP";
    echo $var4;
} else {
    $var4 .= " Java";
    echo $var4;
}

//Trigesimo terceiro

    $a = 4;
    $b = 6;

    echo "<br>";
    echo maior ($a, $b);

    function maior($num1, $num2){
        return $num1 > $num2 ? true : false;
    }

//Trigesimo quarto

    $var1 = 5.5;
    $var2 = -9;

    if ($var2 <= $var1) {

        $var2 += 10;

    } else {

        $var2 *= 2;

    }
    if($var2 < $var1){
        echo "<br>";
        echo "Sim!";
    } else{
        echo "<br>";
        echo "Não!";
    }

//Trigesimo quinto

    function pintar(&$cor){
        $cor = 'Cinza';
        return $cor;
    }
    $nova_cor = 'Verde';

    pintar($nova_cor);
    echo "<br>";
    echo $nova_cor;

//Trigesimo sexto

    function fatorial($num){
        while ($num <= 1){
            return 1;
        }
        return $num * fatorial($num - 1);
    }
    echo "<br>";
    echo fatorial(5);

//Trigesimo setimo

    $carros = ["325i", "Skyline", "Lancer"];

    foreach($carros as $carro)
    {
        echo "<br>";
        echo $carro;
    }

//Trigesimo oitavo

    define('O_NEGATIVO', 'O-');
    echo "<br>";
    echo O_NEGATIVO;

//Trigesimo nono

    function validar ($precoOriginal, $descontoPromocao){
        if ($descontoPromocao < $precoOriginal) {
           return true;
       } else {
           return false;
       }
    }

    $precoOriginal = 45;
    $descontoPromocao = 25;

    if (validar($precoOriginal, $descontoPromocao)){
        echo "<br>";
        echo "Promo válida";
    } else{
        echo "<br>";
        echo "Não está em promoção";
    }

//Quadragesimo

    $variavel = "carro";
    $$variavel = "Gol";
    echo "<br>";
    echo $carro;

?>
</body>
</html>
