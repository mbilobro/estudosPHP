<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<?php

echo date("d/m/Y");
// dia de hoje formato já

//time-------------------------------------------------------------------------------
$nextWeek = time() + (7 * 24 * 60 * 60);
echo "<br>";
echo 'Now:       '. date('d-m-Y') ."<br>";
echo "<br>";
echo 'Next Week: '. date('d-m-Y', $nextWeek) ."<br>";
echo "<br>";
echo 'Next Week: '. date('d-m-Y', strtotime('+2 week')) ."<br>";
// Now: Data atual
// Next Week: Uma semana após a data atual
// Next Week: Duas semanas após a data atual utilizando strtotime

//strtotime--------------------------------------------------------------------------
echo "<br>";
echo 'Next Month: ' . date('d-m-Y', strtotime('+1 month')) . "<br>";
// Next Month: pega a data atual e insere mais um mês

//mktime-----------------------------------------------------------------------------
$data = mktime(02,30,00,05,20,2021);
// Mostra 20-05-2021
echo "<br>";
echo date("d-m-Y", $data)."<br>";

// Mostra 20-05-2021 02:30:00
echo "<br>";
echo date("d-m-Y H:i:s", $data)."<br>";

// Mostra 2021
echo "<br>";
echo date("Y", $data)."<br>";

//dateTime--------------------------------------------------------------------------

    $atual = new DateTime();
    $especifica = new DateTime(' 1990-01-22');
    $texto = new DateTime(' +1 month');

    echo "<br>";
    print_r($atual);
    echo "<br>";
    print_r($especifica);
    echo "<br>";
    print_r($texto);

//datetime com format--------------------------------------------------------------
    $data = new DateTime();
    echo "<br>";
    echo $data->format('d-m-Y H:i:s');
    $data = new DateTime('+1 month');
    echo "<br>";
    echo $data->format('d-m-Y H:i:s');

//datetime com modify--------------------------------------------------------------
    //niver mae
    $data = new DateTime('04-09-1971');
    $data->modify('+1 month');
    echo "<br>";
    echo $data->format('d-m-Y H:i:s');

//setDate-------------------------------------------------------------------------
    $data = new DateTime();
    $data->setDate(2021, 1, 6);
    echo "<br>";
    echo $data->format('d-m-Y H:i:s');

//createFromFormat---------------------------------------------------------------
    $data = '01-06-2021';
    $data1 = DateTime::createFromFormat("m-d-Y", $data);
    echo "<br>";
    echo $data1->format("d-m-Y");

//setTime------------------------------------------------------------------------
    $data = new DateTime('20-05-2021');
    $data->setTime(17, 06, 00);
    echo "<br>";
    echo $data->format('d-m-Y H:i:s');

//DateTimeZone------------------------------------------------------------------
    $fuso = new DateTimeZone('America/Sao_Paulo');
    $data = new DateTime();
    $data->setTimezone($fuso);
    echo "<br>";
    echo $data->format('d-m-Y H:i:s');

//DateInterval------------------------------------------------------------------
    $intervalo = new DateInterval('P3YT8M');
    echo "<br>";
    print_r($intervalo);

//DateInterval com format-------------------------------------------------------
    $intervalo = new DateInterval('P2Y4D');
    echo "<br>";
    echo $intervalo->format('%y anos e %d dias');

//diff--------------------------------------------------------------------------
    $data1 = new DateTime('2011-09-11');
    $data2 = new DateTime('2011-10-13');
    $intervalo = $data1->diff($data2);
    echo "<br>";
    echo $intervalo->format('%R%a dias');

//dateTime com operadores
    $data1 = new DateTime('2011-09-11');
    $data2 = new DateTime('2011-10-13');
    echo "<br>";
    var_dump($data1 == $data2);
    echo "<br>";
    var_dump($data1 > $data2);
    echo "<br>";
    var_dump($data1 < $data2);

//dateTime add
    $data = new DateTime('2011-09-11');
    echo "<br>";
    print_r($data);
    echo "<br>";
    $data->add(new DateInterval('P2M5D'));
    print_r($data);

//dateTime sub
    $data = new DateTime('2011-12-31');
    echo "<br>";
    print_r($data);
    $data->sub(new DateInterval('P7D'));
    echo "<br>";
    print_r($data);

// strftime
    echo "<br>";
    echo strftime("%A");

// getlastmod
    header('Content-type: text/html; charset=UTF-8');
    echo "<br>";
    echo "Última Modificação: " .date("F d Y H:i:s", getlastmod());

//checkdate
    echo "<br>";
    var_dump(checkdate(12, 31, 2000));
    echo "<br>";
    var_dump(checkdate(2, 29, 2001));

//getdate
    $today = getdate();
    echo "<br>";
    print_r($today);

//explode
    $data = date("d/m/Y");
    $data = explode("/", $data);
    list($dia, $mes, $ano) = $data;
    $data = "$dia/$mes/$ano";
    echo "<br>";
    echo $data;

//idate
    $timestamp = strtotime('9st March 1995');
    echo "<br>";
    echo idate('m', $timestamp);


?>
</body>
</html>
