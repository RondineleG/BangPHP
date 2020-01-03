<html>

<head>
    <title> Arrays Operations </title>
</head>

<body>
    <?php
    $myArray = [20.30, 20, 20.50, 50, 60];
    $myArray[] = 90;
    $myArray[7] = 100;

    // count()

    var_dump($myArray);
    $c = count($myArray);
    echo "Lenght is : " . $c;

    echo "<hr>";

    //isset()

    $b = isset($myArray[5]);
    echo ' isset($myArray[5] is : ';
    var_dump($b);

    echo "<hr>";

    //array_keys()

    $arryKeys = array_keys($myArray);
    echo (' array_keys($myArray) is : ');
    var_dump($arryKeys);

    echo "<hr>";
    $Keys2 = ["Name:" => "Rodinele", "Age:" => "27"];
    $arryKeys2 = array_keys($Keys2);
    echo (' array_keys2($myArray) is : ');
    var_dump($arryKeys2);

    echo "<hr>";

    //array_merge()

    $array1 = array("Red", "Green");
    $array2 = array("Blue", "White");

    $r = array_merge($array1, $array2);

    echo (' array_merge($a1, $a2) is : ');
    var_dump($r);


    echo "<hr>";

    //array_fill()

    $a1 = array_fill(0, 4, "Blue");
    echo (' array_fill(0,4,"Blue") is : ');
    var_dump($a1);



    echo "<hr>";

    //array_reverse()

    $a1 = [10, 20, 30, 60, 50, 80];
    $a2 = array_reverse($a1);
    echo (' array_reverse($a1) is : ');
    var_dump($a2);

    echo "<hr>";

    //array_sum()

    $a1 = [10, 20, 30, 60, 50, 80];
    $a2 = array_sum($a1);
    echo (' array_sum($a1) is : ' . $a2);
    var_dump($a2);

    echo "<hr>";

    //array_search()

    $a1 = [10, 20, 30, 60, 50, 80];
    $a2 = array_search(50, $a1);
    echo (' array_search(40, $a1) is : ' . $a2);
    var_dump($a2);


    echo "<hr>";

    //array_values()

    $Keys2 = ["Name:" => "Rodinele", "Age:" => "27"];
    $a2 = array_values($Keys2);
    echo (' array_values($Keys2) is : ' . $a2);
    var_dump($a2);

    echo "<hr>";

    //sort() and rsort()

    $a1 = [100, 20, 3, 60, 2, 8];
    sort($a1);
    echo ('  sort($a1) is : ' . $a1);
    var_dump($a1);

    echo "<hr>";
    $a1 = [100, 20, 3, 60, 2, 8];
    rsort($a1);
    echo ('  rsort($a1) is : ' . $a1);
    var_dump($a1);

    echo "<hr>";

    // asort() and arsort()
    $a1 = ["key1" => 13, "key2" => 11, "key3" => 14, "key4" => 10, "key5" => 12];
    asort($a1);
    echo "asort( a1 ) = ";
    print_r($a1);
    echo "<br>\n";
    arsort($a1);
    echo "arsort( a1 ) = ";
    print_r($a1);
    echo "<br>\n";
    echo "<hr>";


    ?>

</body>

</html>