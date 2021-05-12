<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title></title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $s = $n1 + $n2;
        $r = $n1 - $n2;
        $q = $n1 * $n2;
        $u = $n1 / $n2;
        $w = $n1 % $n2;
        $m = ($n1 + $n2) / 2;

        echo "<h3>Os valores recebidos da URL foram $n1 e $n2</h3>";
        echo "O valor da soma é $s";
        echo "</br>O valor da subtração é $r";
        echo "</br>O valor da multiplicação é $q";
        echo "</br>O valor da divisão é $u";
        echo "</br>O valor do módulo é $w";
        echo "</br>O valor da média é $m";
        echo "</br>O valor absoluto de $n1 é " . abs($n1);
        echo "</br>O valor absoluto de $n2 é " . abs($n2);
        echo "</br>O valor de $n1<sup> $n2</sup> é " . pow($n1, $n2);
        echo "</br>A raiz de $n1 é " . sqrt($n1);
        echo "</br>A raiz de $n2 é " . sqrt($n2);
        echo "</br>O número arredondado de $n1 é " . round($n1);
        echo "</br>A parte inteira de $n1 é " . intval($n1);
        echo "</br>O valor de $n1 em moeda é R$" . number_format($n1,2, ",", ".");
    ?>
</div>
</body>
</html>
