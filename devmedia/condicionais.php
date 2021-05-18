<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php
    $nome = "Matheus";
    $idade = 17;

    if ($idade >= 18){
        echo "O $nome é maior de idade!";
    } else{
        echo "O $nome é menor de idade!";
    }

    $resultado = $idade >= 18 ? "O $nome é maior de idade!" : "O $nome é menor de idade!";
    echo "<br>";
    echo $resultado;

    $a = 10;
    $b = 2;
    echo "<br>";

    if ($a/$b==2)
    {
        echo "O resultado da divisão é 2";
    }
    elseif ($a/$b==4)
    {
        echo "O resultado da divisão é 4";
    }
    else
    {
        echo "O resultado da divisão não é 2 nem 4";
    }

    $Nome = "Fulano de tal";
    $Nome = ($Nome) ?: "Sem nome";
    echo "<br>";
    echo $Nome;

    //Switch case

    $sorteio = rand(0,5);
    echo "<br>";
    switch($sorteio){
        case 0:
            echo "Você perdeu a vez!";
            break;
        case 1:
            echo "Avance 1 casa!";
            break;
        case 2:
            echo "Avance 2 casas!";
            break;
        default:
            echo "Jogue novamente!";
            break;
    }

    //Break
    echo "<br>";
    $funcionarios = array(
      array('id' => 1, 'nome' => "João", 'salario' => 5000),
        array('id' => 22, 'nome' => "Mauro", 'salario' => 1000),
        array('id' => 8, 'nome' => "Alice", 'salario' => 2000),
    );

    foreach ($funcionarios as $i => $funcionario){
        if($funcionario['id'] == 8){
            $busca = $funcionario;
            break;
        }
    }

    if(isset($busca)){
        echo "Funcionário encontrado: {$busca['nome']} - Id: {$busca['id']}";
    } else{
        echo "Funcionário não encontrado";
    }

    //Continue
    echo "<br>";

    foreach ($funcionarios as $i => $funcionario){
        if($funcionario['salario'] >= 5000){
            continue;
        }
        $funcionarios[$i]['salario'] = $funcionario['salario']
            + ($funcionario['salario'] * 0.1);
    }

    foreach ($funcionarios as $funcionario){
        echo $funcionario["nome"] . " $" . $funcionario["salario"] . "<br>";
}
    $i = 0;
        echo "<br>";
        while ($i++ < 5) {
            if ($i == 4) break;
            echo $i . "\n";
        }

    $r = 0;
        echo "<br>";
        while ($r++ < 5) {
            if ($r == 3) continue;
            echo $r . "\n";
        }

    $i = 0;
    echo "<br>";
    while ($i++ < 3) {
            echo "3\n";
            while (1) {
                echo "2\n";
                    while (1) {
                        echo "1\n";
            break 3;
        }
        echo "Essa linha nunca vai ser exibida\n";
    }
    echo "Nem essa linha\n";
}

    //Functions
    // Passagem por valor
    function soma($num_1,$num_2){
        $total = $num_1 + $num_2;
    return $total;
}
echo "<br>";
echo soma(5,3);

    // Passagem por referencia
    //Criada a referência em $num_1
    function referencia(&$num_1){
        $num_1 *= 5;
    //retorno o valor de $num_1 * 5
    return $num_1;
    }

    $num_2 = 3;

    //Execução da função
    referencia($num_2);
    echo "<br>";
    echo $num_2;

    $num_1 = 15;

    function exemplo($num_1, $num_2){

    $operacao= $num_1 / $num_2;

    return $operacao;

}

//Retorna erro
echo "<br>";
echo exemplo(5, 2);

$valor = 100;
$desconto = 0;

if ($valor > 100){
    $desconto = 20;
} else{
    $desconto = 5;
}

$valor = $valor - $desconto;
echo "<br>";
echo $valor;

$valor_1 = 2;
$valor_2 = ( $valor_1  - 1) * 3;

$soma = $valor_1 + $valor_2;
$mensagem = "mensagem";

if( $soma > 5 ){
    $mensagem = "O valor da soma é maior que 5";
} else if ($soma < 5) {
    $mensagem = "O valor da soma é menor que 5";
} else {
    $mensagem = "O valor da soma é igual a 5";
}
echo "<br>";
echo $mensagem;

define('MENSAGEM', 'minha mensagem');

$numero_1 = 1;
$numero_2 = 2;

$a = 1;
$b = 2;


if ($a + $b > 4){
    $nome = 'Hélio';
} else if ($a - $b == 3){
    $nome = 'Andreza';
} else if($a * $b == 3){
    $nome = 'Lúcia';
} else {
    $nome = 'Romário';
}
echo "<br>";
echo $nome;

$a = 8;
$b = 2;
$c = 4;

$numero_ator = ($a - $c) / $b;

switch ($numero_ator) {
    case 1:
        echo "Denzel Washington";
        break;
    case 2:
        echo "David Wenham";
        break;
    case 3:
        echo "Orlando Bloom";
        break;
    case 4:
        echo "Rodrigo Santoro";
        break;
    default:
        echo "Nenhum ator";
        break;
}
$a = 6;
$b = 5;
$c = 7;

$resultado_final = "a";

if( $a > $c || $a > $b ){
    $resultado_final = "b";
} else if( $b > $c || $b > $a ){
    $resultado_final = "c";
} else {
    $resultado_final = "d";
}
echo "<br>";

echo $resultado_final;

$booleano_1 = true;
$booleano_2 = false;
$booleano_3 = false;

$total = 0;

if( $booleano_1 ){
    $total += 1;
}
if( $booleano_1 && !$booleano_2 ){
    $total +=1;
}
if( $booleano_1 && $booleano_3 ){
    $total +=1;
}
echo "<br>";

echo $total;

$val_1 = 1;
$val_2 = 2;
$val_3 = 3;

if( $val_1 < $val_2 ){
    $val_1 += 3;
}

if( $val_2 < $val_3 && $val_1 > $val_3 ){
    $val_1 += 1;
}
echo "<br>";

echo $val_1;

$peso_pedro = 90.7;
$peso_rodrigo = 88.4;
$peso_tarso = 97.3;
$peso_juliano = 102.9;

$soma_pesos = $peso_pedro + $peso_rodrigo + $peso_tarso + $peso_juliano;

$capacidade_elevador = 250;
echo "<br>";

if($soma_pesos >= $capacidade_elevador) {
    echo "Os 4 amigos não podem ir juntos no elevador :(";
}else{
        echo "Os 4 amigos podem ir no elevador de uma vez :)";
    }

?>
</body>
</html>
