<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Numbers</title>
</head>

<body>
    <?php

    print "<h2>Integers</h2>";

    # Check if the type of a variable is interger
    $varInt = 7878;
    var_dump(is_int($x));
    print "<br>";
    $varInt = 78.78;
    var_dump(is_int($x));

    print "<h2>FLoats</h2>";

    # Check if the type of a variable is float

    $varFloat = 10.44;

    var_dump(is_float($varFloat));

    print "<h2>Infity</h2>";

    # Check if the type of a variable is finite or infinite

    $varInfite = 1.9e411;

    var_dump(is_float($varInfite));

    print "<h2>NaN</h2>";

    # Check if the type of a variable is NaN value

    $varNaN = acos(8);

    var_dump(is_float($varNaN));


    print "<h2>Numerical Strings</h2>";

    # Check if the type of a variable is numeric

    $a = 7878;
    var_dump(is_numeric($a));
    print "<br>";
    $a = "70" + 100;
    var_dump(is_numeric($a));
    print "<br>";
    $a = "7878";
    var_dump(is_numeric($a));
    print "<br>";
    $a = "Hello";
    var_dump(is_numeric($a));
    print "<br>";


    print "<h2>Casting strings and float to integers</h2>";

    # Cast float and strings to integer


    //Cast float to int
    $x = 23.55;
    $intCast = (int) $x;

    echo $intCast;

    echo "<br>";

    // Cast string to int

    $x = "23.55";
    $intCast = (int) $x;
    print $intCast;


    ?>
</body>

</html>