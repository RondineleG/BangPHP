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
    print"<h2>Arrays</h2>";

    $cars = array ("uno","gol","palio");

    print"I like " .$cars[0] . " , ".$cars[1]." and ".$cars[2].".";
    
    print"<br>";
    // lenght of array
    print count($cars);
    ?>
</body>

</html>