<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Aula 07 - Operadores Relacionais</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $tipo = $_GET["opcao"];

        $valor = $tipo == "s" ? $n1 +$n2 : $n1 * $n2;
        echo "Os valores passados na URL foram $n1 e $n2.";
        echo "<br>O usuario escolheu  a opção $tipo e o valor resultou em $valor.";

        //Igual e identico
        $a = 3;
        $b = "3";
        $r = $a == $b ? "SIM!" : "NÃO!";
        echo "<br><br>O valor de A e de B são iguais? $r";
        $s = $a === $b ? "SIM!" : "NÃO!";
        echo "<br><br>O valor de A e de B são iguais? $s";

        //Media
        $media = ($n1 + $n2) / 2;
        $resultado = $media >= 7 ? "APROVADO!" : "REPROVADO!";
        echo "<br><br>O aluno com as notas $n1 e $n2 obteve a média $media e foi $resultado";

        // Operadores lógicos
        $anoatual = 2021;
        $anoidade = $_GET["idade"];
        $anoatual -= $anoidade;
        $votacao = $anoidade >= 18 && $anoidade < 65 ? "É OBRIGATORIO O VOTO!" : "NÃO É OBRIGATORIO O VOTO!";
        echo "<br><br>O eleitor que tem $anoidade anos $votacao";
    ?>
</div>
</body>
</html>
