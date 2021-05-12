<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Aula 8 - Integração HMTL - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        $raiz = sqrt($valor);
        echo "O usuário digitou o $valor e sua raiz quadrada é " . number_format($raiz, 2, ",", ".");
    ?>
    <a href="01exercicio.html">Voltar</a>
</div>
</body>
</html>
