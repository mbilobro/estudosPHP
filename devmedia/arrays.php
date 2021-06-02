<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php
    $funcionario = array(1, 1000.0, "João da Silva", true);
    echo "Código: ".$funcionario[0]." ";
    echo "Salário: ".$funcionario[1]." ";
    echo "Nome: ".$funcionario[2]." ";
    echo "Ativo: ".$funcionario[3]." ";

    $funcionarios = array(
        array(1, 1000.0, "João da Silva Santos", true),
        array(2, 800.0, "Pedro dos Santos", false)
    );
$ativo = true;

    foreach ($funcionarios as $chave => $valor){
        echo "<br>";
        $valorstring[3] = $valor[3] == true ? "Está ativo" : "Não está ativo";
        echo "Funcionario {$chave} - {$valor[0]}: {$valor[2]} - Salário: {$valor[1]} - Ativo? {$valorstring[3]}";
        echo "<br>";
    }

    $linguagens = array(
    array("PHP", "PHP: Hypertext Preprocessor"),
    array("SQL", "Structured Query Language")
    );

    echo ("<br>");
    echo $linguagens[1][0];

?>
</body>
</html>
