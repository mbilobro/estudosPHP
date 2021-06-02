<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php
//01
    echo "<br>";
    echo date("d/m/Y");
    echo "<br>";
    echo strftime("%A");

//02

    $data_atual = new DateTime();
    $ano = $data_atual->format('Y');

    if( $ano % 4 == 0 )
    {
        echo "<br>";
        echo  'Ano bissexto' ;
    }
    else
    {
        echo "<br>";
        echo  'Não é ano bissexto' ;
    }

//03

    $candidato = array(
        "nome" => "Fernando Souza",
        "tecnologias" => array("PHP", "Java", "JavaScript", "Python")
    );
    $tecnologias = $candidato['tecnologias'] ;

    $tecnologia_busca = "PHP";

    $i = 0;

    while( $i < count($tecnologias) ) {
        if ($tecnologias[$i] == $tecnologia_busca) {
            echo "<br>";
            echo "O candidato aprovado";
        }
        $i++;
    }

//04

    $notas = array(9, 4, 10);
    $total_av = count($notas);
    $total_notas = 0;

    foreach ($notas as $nota) {
        $total_notas += $nota;
    }

    $media = $total_notas / $total_av;
    echo $media;
    $resultado = $media > 6 ? "Aprovado": "Reprovado" ;
    echo "<br>";
    echo $resultado;

//05

    $today = getdate(  );
    $dia_semana = $today['wday'];
    $dia_mes = $today['mday'];

    $promocao_do_dia = "";

    if ($dia_semana == 5 && $dia_mes == 13)
    {
        $promocao_do_dia =  "20% de desconto das 22:00 às 23:59.";
    }
    else
     {
         $promocao_do_dia = "12% de desconto hoje.";
     }
    echo "<br>";
    echo $promocao_do_dia;

//06

    $filme = array(
        "nome" => "Um lugar silencioso 2",
        "diretor" => "John Krasinski",
        "lançamento" => 2021
    );

    $data_atual = new DateTime();
    $ano_atual = $data_atual->format('Y');
    $texto = "";

    if ($filme["lançamento"] == $ano_atual) {
        $texto = "Lançamento do ano dá um play";
    } else if ($filme["lançamento"] > $ano_atual) {
        $texto = "Este filme ainda não lançou.";
    } else {
        $texto = "Filme disponível para assistir.";
    }
    echo "<br>";
    echo $texto;

//07

$apps = array( "ifood", "whatsapp", "uber");

    foreach ($apps as $app) {
        echo "<br>";
        echo $app;
    }

//08

    $salarios = array(2500, 1800, 3000);
    $soma_salarios = 0;

    foreach($salarios as $salario) {
        $soma_salarios += $salario;
    }

    $media_salario = $soma_salarios / count($salarios);
    echo "<br>";
    echo "A média de salário da empresa é de : R$ " . $media_salario;

//09

    $jogos = array(
        "Call of Duty",
        "Pokémon GO",
        "UNO!",
        "Brain Test"
    );

    foreach( $jogos as $jogo )
    {
        echo "<br>";
        echo $jogo;
    }

    $i = 0;
    while ( $i < count($jogos) ) {
        echo "<br>";
        echo $jogos[$i];
        $i++;
    }
        for ($i=0; $i < count($jogos); $i++) {
            echo "<br>";
            echo $jogos[$i];
        }

//10

    $carro = array (
            "marca" => "GM",
            "modelo" => "Onix",
            "ano" => 2020
    );

    $ano_busca = 2020;

    if($carro['ano'] == $ano_busca){
        echo "<br>";
        echo "Marca: " . $carro['marca'];
        echo "<br>";
        echo "Modelo: " . $carro['modelo'];
    } else {
        echo "<br>";
        echo "Carro não encontrado";
    }

//11

    $garantia = new DateTime();
    $categoria_produto = "Eletrônicos";

    switch($categoria_produto)
    {
        case 'Eletrônicos': $garantia->add(
            new DateInterval('P1Y')
        ); break;
        case 'Ferramentas': $garantia->add( new DateInterval('P6M')); break;

        default: $garantia->add( new DateInterval('P2M')); break;
    }
    echo "<br>";
    echo "Garantia válida até: " . $garantia->format('d-m-Y');

//12

    $apps = array(
        array( "nome" => "ifood", "instalado" => false ),
        array( "nome" => "whatsapp", "instalado" => true ),
        array( "nome" => "uber", "instalado" => true ),
    );

    foreach ($apps as $app)
    {
        if ( $app["instalado"] == false ) {
            echo "<br>";
            echo "Deseja instalar o app: " . $app["nome"];
        }
}
//13

        $boleto = array (
            "titulo" => "Luz",
            "valor" =>  568,
            "vencimento" => "2020-12-01"
        );
        $hoje = new DateTime();
        $data_vencimento = new DateTime($boleto["vencimento"]);
        if ( $hoje >= $data_vencimento ) {
            echo "<br>";
            echo "Conta vencida";
        } else {
            echo "<br>";
            echo "Conta a vencer";
        }
//14

        $lista_compras = [
            "Batata",
            "Cenoura",
            "Laranja",
            "Coco",
            "Beterraba"
        ];

        /*for ($i=0; $i < count( $lista_compras ); $i++) {
            echo "<br>";
            echo $lista_compras[$i];
        }*/

        /*foreach ($lista_compras as $item_lista) {
            echo "<br>";
            echo $item_lista;
        }*/

//15
/*
        $data_atual = new DateTime();
        $inauguracao = new DateTime("2021-12-08");

        if ( $data_atual > $inauguracao ) {
            echo "<br>";
            echo "Loja em funcionamento aproveite!";
        } else {
            $intervalo = $inauguracao->diff($data_atual);
            echo "<br>";
            echo $intervalo->format('Faltam: %D dias %H horas %I minutos para a inauguracao');
        }
*/

//16
//CERTOS
        /*$hoje = new DateTime();
        echo "<br>";
        echo $hoje->format('Y-m-d');*/

        /*$hoje = date('Y-m-d');
        echo "<br>";
        echo $hoje;*/
//ERRADO
        /*$hoje = timetostring('Y-m-d');
        echo "<br>";
        echo $hoje;*/

//17
/*
        $valores_venda = [ 590.00, 850.00, 150.00, 10.00 ];
        $vendas = count($valores_venda);
        $vendas_ouro = 0;
        $vendas_prata = 0;

        foreach ($valores_venda as $valor)
        {
            if ( $valor > 500 ) {
                $vendas_ouro ++;
            } else if ( $valor > 200 ){
                $vendas_prata ++;
            }
        }
        echo "<br>";
        echo "Resumo de vendas:";
        echo "<br>";
        echo "Total de vendas: " . $vendas;
        echo $vendas_ouro . " Vendas ouro:";
        echo "<br>";
        echo $vendas_prata . " Vendas prata:";
   */

//18
/*
        $guias_mobile = [ "React Native", "Flutter"];
        $total_guias = count($guias_mobile);

        for( $i = 0; $i < $total_guias; $i++)
        {
            echo "<br>";
            echo $i . ' - ' . $guias_mobile[$i];
        }
*/
// 19
        $data = new DateTime();
        echo "<br>";
        echo $data->format('d-m-Y H:i:s');

//20

    $data_atual = getdate(  );
    $dia_semana = $data_atual['wday'];

    switch($dia_semana) {
        case 0: echo "<br>"."Domingo"; break;
        case 1: echo "<br>"."Segunda-feira"; break;
        case 2: echo "<br>"."Terça-feira"; break;
        case 3: echo "<br>"."Quarta-feira"; break;
        case 4: echo "<br>"."Quinta-feira"; break;
        case 5: echo "<br>"."Sexta-feira"; break;
        case 6: echo "<br>"."Sábado"; break;
        default: echo "<br>"."Dia inválido"; break;
    }

//21

    $data_atual = new DateTime();
    $inauguracao = new DateTime("2022-12-08");

    if ( $data_atual > $inauguracao ) {
        echo "<br>";
        echo "Loja em funcionamento aproveite!";
    } else {
        $intervalo = $data_atual->diff($inauguracao);
        echo "<br>";
        echo $intervalo->format('Faltam: %D dias %H horas %I minutos para a inauguracao');
    }

echo "<br>";
echo date("d/m/Y");

//22

    $data_atual = getdate(  );
    $dia_semana = $data_atual['wday'];

    $escala = ["Amanda", "João", "Juliana", "Rogério", "Bianca", "Roberto", "Kelly"];

    $plantao = $escala[$dia_semana];
    echo "<br>";
    echo "O funcionário de plantão é: " . $plantao;

//23

$data_atual = new DateTime();
$data_vencimento = new DateTime('2020-12-31');

$diferenca = $data_vencimento->diff($data_atual);
$diferenca_dias = $diferenca->format('%R%a');

if($diferenca_dias > 0)
{
    echo "<br>";
    echo "A conta está atrasada!!!!";
}
elseif($diferenca_dias == 0)
{
    echo "<br>";
    echo "A conta venceu hoje!!!!!!.";
}
else
{
    echo "<br>";
    echo "A conta ainda não venceu";
}
?>
</body>
</html>
