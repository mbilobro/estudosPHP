<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php
    //For
    echo "Exemplo de for" . "<br>";

    for ($i = 0; $i <= 10; $i++){
        echo "$i" . "<br>";
    }
    echo "<br>";


//For each
    echo "Exemplo de foreach" . "<br>";
    $vetor = array(1, 2, 3, 4, 5);
    foreach($vetor as $item)
    {
        echo $item;
        echo "<br>";
    }
    echo "<br>";

    //Break
    echo "Exemplo de Break" . "<br>";
    $pararLoop = 5;

    for($numero = 0; ; $numero++){
        if($numero == $pararLoop){
            break;
        }
    echo $numero."<br>";
    }

    //Continue
    echo "Exemplo de Continue" . "<br>";

    for($i = 0; $i < 10; $i++){
        if($i % 2 == 0){
            continue;
        }
        echo $i."<br>";
    }

    //for
    echo "Mais um exemplo de For" . "<br>";

    $colecao = [1, 3, 6, 9, 13];
    $soma = 0;
    for($i = 0, $j = count($colecao); $i < $j; $i++){
        $soma += $colecao[$i];
    }
    echo "<br>";
    echo $soma;

    //While
    echo "<br>";
    echo "Exemplo de While" . "<br>";

    $i = 0;
    while($i <= 10){
        echo $i . "<br>";
        $i++;
    }

    //Do While
    echo "<br>";
    echo "Exemplo de While" . "<br>";
    $i = 0;

    do{
        echo $i . "<br>";
        $i++;
    } while ($i < 5);

    // Exemplo While
    echo "<br>";
    echo "Exemplo de While" . "<br>";
    $minimo = 10;
    $maximo = 30;
    $numero = $minimo + 1;

    while ( $numero < $maximo) {
        echo $numero . " ";
        $numero++;
}
?>
</body>
</html>
