<html>

<head>
    <title>Integers Operations</title>
</head>

<body>
    <?php
    $i = 100;
    $sum  = $i + 100;
    $sub   = $i - 50;
    $div   = $i / 5;
    $mul   = $i * 5;
    $mod = $i % 3;

    printf(
        "<p> i=%d<br>  i+100=%d<br>
     i-50=%d<br> i/50=%d<br> i*5= %d<br> 
     i resto 3=%d </p>\n",
        $i,
        $sum,
        $sub,
        $div,
        $mul,
        $$mod
    );

    $i = 1;
    $i++;

    echo "i = $i <br>";
    printf("i++ = %d <br>", $i++);

    echo "i = $i <br>";
    printf("++i = %d <br>", ++$i);

    echo "i = $i <br>";
    printf("i-- = %d <br>", $i--);

    echo "i = $i <br>";
    printf("--i = %d <br>", --$i);

    $i += 2; // $i = $i + 2 (+ - * /)
    $i *= 2; // $i = $i * 2 (+ - * /)
    $i /= 2; // $i = $i / 2 (+ - * /)
    $i -= 2; // $i = $i - 2 (+ - * /)
    ?>
</body>

</html>