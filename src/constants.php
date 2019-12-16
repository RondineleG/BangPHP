<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Constants</title>
</head>

<body>
    <?php
    print "<h2>Constant</h2>";

    define("HELLO", "Welcome to w3schoorls.com !");
    print HELLO;
    echo "<br>";

    print "<h2>Constant Array</h2>";

    define(
        "cars",
        [
            "Alfa Romeo",
            "Bmw",
            "Toyota"
        ]
    );
    print cars[2];
    echo "<br>";


    ?>
</body>

</html>