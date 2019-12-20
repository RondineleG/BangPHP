<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Inheritance</title>
</head>

<body>
    <?php

    class Fruit
    {
        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this -> name = $name;
            $this->color = $color;            
        }

        protected function intro()
        {
            echo "The fruit i {$this->name} and the color is {$this->color}.";
        }
    }

    class Strawberry extends Fruit
    {
        public function message()
        {
            echo "Am i a fruit os berry ?";
        }
    }
    //try to call all methods from outside class
    $strawberry = new Strawberry("Strawberry", "red"); //ok
    echo "Name : ". $strawberry ->name;
    echo("<br>");
    echo "Color : ". $strawberry ->color;
    echo("<br>");

    $strawberry ->message(); //ok
    echo("<br>"); 

    #$strawberry ->intro(); // ERROR . intro() is protected
    ?>
</body>

</html>