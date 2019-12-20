<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Access Modifiers</title>
</head>

<body>
    <?php
       class Fruit
       {
           public $name;
           protected $color;
           private $weight;
       }

       $mango = new Fruit();
       $mango -> name = "Mangos"; // ok
       #$mango -> color = "Yellow"; //error
       #$mango -> weight = "300"; //error

       echo($mango -> name);
    ?>
</body>

</html>