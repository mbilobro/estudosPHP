<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <?php
    $preco = $_GET ["preco"];
    echo "O preço do produto é de R$" . number_format($preco, 2, ",", ".");
    $preco -= ($preco * 10 / 100);
    echo "<br>O valor final do produto com 10% de desconto é de R$" . number_format($preco, 2, ",", ".");
    $ano = $_GET ["ano"];
    echo "<br>O ano atual é $ano";
    $ano--;
    echo "<br>O ano anterior é $ano";
    // Referencias de variaveis
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "<br> A variavel A vale: $a";
    echo "<br> A variavel B vale: $b";
    //Variavel variante
    $site = "cursoemvideo";
    $$site = "cursoPHP";
    echo "<br> $site";
    echo "<br> $cursoemvideo";
    ?>
</div>
</body>
</html>
