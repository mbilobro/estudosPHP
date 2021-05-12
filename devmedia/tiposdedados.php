<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php
    // boolean
    $noite = FALSE;
    $chuva = TRUE;
    $numero = 15;
    $string = "15";

    $denoite = $noite ?  "Está de noite." : "Está de dia.";
    echo "<br/>$denoite";

    if($chuva)
        echo "<br/>Está chovendo.";
    else
        echo "<br/>Não está chovendo.";

    // echo $numero + $string;

    $vetor [1] = "Alemanha ";
    $vetor [2] = "Italia ";
    $vetor [3] = "França";
    $vetor ["testando"] = 1;

    $vetor = array(1 => "Alemanha", 2 => "Italia", 3 => "França", "testando" => "Brasil");

    $vetorPaises = array("Alemanha", "Italia", "França", "Noruega");

    echo "<br/>" . $vetor["testando"];
    echo "<br/>" . $vetorPaises[3];

    class CD
    {
    var $titulo;
    var $banda;
    var $ano_lancamento;
    }

    $disco = new CD();
    $disco ->titulo = "The Number of the Beast";
    $disco ->banda = "Iron Maiden";
    $disco ->ano_lancamento = 1982;
    
?>
</body>
</html>
