<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Foreach</title>
</head>

<body>
    <?php
    print "<h2>Foreach</h2>";

    $colors = array("red","green","blue","yellow");

    foreach($colors as $value)
    {
       print "$value <br>";
    }

    print "<br><br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $val)
    {
        print("$x  - $val <br>");

    }

    ?>
</body>

</html>