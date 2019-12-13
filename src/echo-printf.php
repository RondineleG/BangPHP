<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Impressão de textos  </title>

</head>
<body>

<?php

    echo "Teste de Impressão!<br>";
    $s="Teste de Impressão!<br>";
    echo $s;
    echo "S = $s";
    
    $n = 80;
    printf("<p> n = %d </p>", $n);
    printf("<p> n = %8d </p>", $n);
    printf("<p> n = %08d </p>", $n);

    $d = 80.10;
    printf("<p> n = %8.2f </p>", $d);
    printf("<p> n = %08.2f </p>", $d);
    
    $s = "Meu Texto"; 
    printf("<p>%s: %d </p>\n",   $s, $n);
    printf("<p>%15s:  </p>\n", $s);
    printf("<p>%.5s:  </p>\n", $s);
    
    $b = true;
    echo "<p> $b </p> ";
    
    echo "<br>";
    
    var_dump($s);
    var_dump($n);
    var_dump($d);
    var_dump($b);

?>

</body>
</html>