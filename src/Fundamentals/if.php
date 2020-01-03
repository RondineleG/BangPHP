<html>

<head>
    <title> If ElseIf and Else </title>
</head>

<body>

    <?php
    $a = false;
    if ($a)
        echo "<p> a= true </p>\n";

    if ($a)
        echo "<p> a= true </p>\n";
    else
        echo "<p> a= false </p>\n";

    $a = 3;
    if ($a == 1)
        echo "<p> a = 1 </p>\n";
    elseif ($a == 2)
        echo "<p> a = 2 </p>\n";
    elseif ($a == 3)
        echo "<p> a = 3 </p>\n";
    else
        echo "<p> a = i don't know </p>\n";

    print "<hr>";

    $a = '3';
    $b = 1;

    if (is_integer($a))
        echo "<p>a =  int</p>\n";
    else
        echo "<p>a is not int</p>\n";

    if (is_integer($b))
        echo "<p>b =  int</p>\n";
    else
        echo "<p>b is not  int</p>\n";

    if (is_string($a) && strcmp($a, '3') == 0)
        echo "<p>Result OK</p>\n";

    $a = 3;
    $b = 1;
    if ($a > $b)
        echo "<p>$a greater than $b</p>\n";
    elseif ($a < $b)
        echo "<p>$a less than $b</p>\n";
    else
        echo "<p>$a equal to $b</p>\n";

    if ($a > $b && ($a == 1 || $a == 3) && ($a != 0))
        echo "<p>result ok</p>\n";


    // ternary operator
    $b = ($a == 3) ? 30 : 40;
    /*
       same as :
        if ($a==3)
        {
            $b = 30;
        }
        else
         {
               $b = 40;
         }   
    */
    ?>

</body>