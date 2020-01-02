<html>

<head>
    <title>Float Operations </title>
</head>

<body>
    <?php
    $i = 100.5;
    $sum  = $i + 100;
    $sub   = $i - 50;
    $div   = $i / 5;
    $mul   = $i * 5;

    printf(
        "<p> i=%f<br>  i+100=%f<br>
        i-50=%f<br> i/50=%f<br> i*5= %f<br> </p>\n",
        $i,
        $sum,
        $sub,
        $div,
        $mul,
    );

    ?>
</body>

</html>