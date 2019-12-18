<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Learning PHP - Commaand echo and print </title>

</head>

<body>

    <?php
    echo "<h1> Command echo</h1>";

    echo "<h2> PHP is fun !</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP ! <br>";
    echo "This", "string", "was", "made", "with multiple parameters";

    $txtTitle = "Learn PHP";

    $txtUrl = "www.w3schools.com";

    $x = 500;
    $y = 400;


    echo "<h2>" . $txtTitle . "</h2>";

    echo "Study PHP at " . $txtUrl . "<br>";

    echo "The multiplication value of $x and $y is : ";
    echo  $x * $y;

    echo "<h1> Commmand print </h1>";

    print "<h2>PHP is more or less</h2>";
    print " Save the world <br>";

    print "I'm about to learn PHP";

    ?>

</body>

</html>