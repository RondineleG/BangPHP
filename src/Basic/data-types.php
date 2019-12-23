<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Data Types</title>
</head>

<body>
    <?php
    echo "<h2>String</h2>";

    # this is a declaration of string 

    $fistName = "Rondinele";
    $lastName = "Guimarães";
    $aboutMe = "<p>I'm studying, i really this area,<br>
        i don't understand everything very well. But my persistence is very
        high,<br> so let's write a lot of code.</p>
        ";
    echo $aboutMe;
    print "Author : ";
    //concatenations strings using "."
    echo $fistName . " " . $lastName;
    print "<br>";

    var_dump($fistName);
    if (is_string($fistName)) {
        print " The $fistName is a string";
    } else {
        print "The $fistName is not a string";
    }

    echo "<h2>Integer</h2>";

    # this is a declaration of integer

    $age = 27;
    $numberPhone = 1245412;

    var_dump($age);

    if (is_int($age)) {
        print " The $age is a int";
    } else {
        print "The $age is not a int";
    }

    echo "<h2>Float</h2>";

    # this is a declaration of float

    $height = 1.66;
    $price = 6.88;

    var_dump($height);

    echo "<h2>Boolean</h2>";

    # this is a declaration of boolean

    $isLive = true;
    $isDead = false;

    var_dump($isDead);


    echo "<h2>Array</h2>";

    # this is a declaration of array

    $cars = array("Fiesta", "Gol", "Uno");

    var_dump($cars);


    echo "<h2>Object</h2>";

    # this is a declaration of object

    class Car
    {
        function Car()
        {
            $this->maker = "Ford";
            $this->category = "Compact";
            $this->color = "Red";
        }
    }
    $ka = new Car("Category");
    print "The maker of car is : ";
    echo $ka->maker;
    print "<br>";
    print "The category of car is : ";
    echo $ka->category;
    print "<br>";
    print "The color of car is : ";
    echo $ka->color;

    echo "<h2>Null Value</h2>";

    # this is a declaration of null value

    $x = "Hello Word";
    var_dump($x);
    print("<br><br>");
    $x = null;
    var_dump($x);

    ?>
</body>

</html>