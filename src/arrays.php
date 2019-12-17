<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Arrays</title>
</head>

<body>
    <?php
    print "<h2>Arrays</h2>";

    $cars = array("uno", "gol", "palio");

    print "I like " . $cars[0] . " , " . $cars[1] . " and " . $cars[2] . ".";

    print "<br>";
    // lenght of array
    print count($cars);


    print "<h2>Loop through Indexed Arrays</h2>";

    $carrLenght = count($cars);

    for ($x = 0; $x < $carrLenght; $x++) {
        print $cars[$x];
        print "<br>";
    }

    print "<h2>Associative Arrays</h2>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    print "Peter is " . $age['Peter'] . " years old.";

    print "<h2>Loop through Associative Arrays</h2>";
    foreach ($age as $x => $x_values) {
        print "Key=" . $x . ", Value=" . $x_values;
        print "<br>";
    }

    print "<h2>Multidimensional Arrays</h2>";
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    sort($cars);

    echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }

    print "<h2>Functions For Arrays</h2>";
    
    print "<h2>sort()</h2>";

    $numbers = array(4, 8, 6, 22, 55, 1, 2);
    sort($numbers);

    $arrayLenght = count($numbers);
    for ($x = 0; $x < $arrayLenght; $x++) {
        print($numbers[$x]);
        print "<br>";
    }
    print "<br>";

    print "<h2>rsort()</h2>";
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($cars);

    $carsLenght = count($cars);
    for ($x = 0; $x < $carsLenght; $x++) {
        print($cars[$x]);
        print "<br>";
    }
    print "<h2>asort() by Value</h2>";
    $age = array ("Rondinele"=>"27","Beatriz"=>"40","Gabriela"=>"26");
    asort($age);

    $ageLenght = count($age);
    foreach ($age as $x => $x_values) {
        print"Key=". $x . ", Value=". $x_values;
        print "<br>";
    }

    print "<h2>asort() by Key</h2>";
    $age = array ("Amanda"=>"40","Rondinele"=>"57","Beatriz"=>"400","Gabriela"=>"26");
    ksort($age);   
    foreach ($age as $x => $x_values) {
        print"Key=". $x . ", Value=". $x_values;
        print "<br>";
    }
    
    
    ?>
</body>

</html>