<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[O nome não foi informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[O ano não foi informado]";
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[O sexo não foi informado]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e possui $idade anos.";
    ?>
    <br/><a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>
 