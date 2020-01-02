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

    // round()
    $r = 15.346;
    $r0 = round($r);
    $r1 = round($r, 1); // with precision
    $r2 = round($r, 2); // with precision
    printf("<p> r  = %f </p>\n", $r);
    printf("<p> r0 = %f </p>\n", $r0);
    printf("<p> r1 = %f </p>\n", $r1);
    printf("<p> r2 = %f </p>\n", $r2);


    // ceil() e floor()
    $r = 15.366;
    $r0 = ceil($r);
    $r1 = floor($r);
    printf("<p> r  = %f </p>\n", $r);
    printf("<p> ceil  r0 = %f </p>\n", $r0);
    printf("<p> floor r1 = %f </p>\n", $r1);


    // intval()
    $r = 15.366;
    $i = intval(15.366);
    $b = is_float($r);
    echo "is_float( $r ) = $b <br>";
    $b = is_integer($i);
    echo "is_integer( $i ) = $b <br>";

     // pow()
     $r = pow(2, 10);
     printf("<p> 2^10 = %10.4f </p>\n", $r);
     $r = pow(2.1, 9);
     printf("<p> 2.1^9 = %10.4f </p>\n", $r);
 

     // rand()
     $r = rand();
     printf("<p> rand = %10.4f </p>\n", $r);
     printf("<p> rand = %10.4f </p>\n", rand());
     printf("<p> rand = %10.4f </p>\n", rand());
     printf("<p> rand 1-10   = %10.4f </p>\n", rand(1, 10));
     printf("<p> rand 10-100 = %10.4f </p>\n", rand(10, 100));
   

    ?>
</body>

</html>