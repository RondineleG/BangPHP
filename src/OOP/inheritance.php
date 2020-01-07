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
            $this->name = $name;
            $this->color = $color;
        }

        protected function intro()
        {
            echo "The fruit i {$this->name} and the color is {$this->color}.";
        }
    }

    class Strawberry extends Fruit
    {
        public $weight;
        public function __construct($name, $color,$weight)
        {

            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        protected function intro()
        {
            echo "The fruit i {$this->name} and the 
            color is {$this->color}, and weight is {$this->weight} gram.";
        }
        public function message()
        {
            echo "Am i a fruit os berry ?<br>";

            //call protected method from within derived class - Ok

               $this -> intro();
        }
    }
    //try to call all methods from outside class
    $strawberry = new Strawberry("Strawberry", "red", 100); //ok
    // __constructor() is public

    echo "Name : " . $strawberry->name;
    echo ("<br>");
    echo "Color : " . $strawberry->color;
    echo ("<br>");

    $strawberry->message();
    //ok. message() is a public an it calls intro() (which is protected) from within the devired class
    echo ("<br>");
    $strawberry ->intro();

    // The final keyword to prevent class or methods overriding
    final class Day
    {
        
    }

    /*
    will result in error
    class Hour extends Day
    {

    }

    */
     
    class Year
    {
        //The final keyword for methods
        final public function intro()
        {

        }

    }
    class Month extends Year
    {
        /*
        
        will result in error

         public function intro()
         {

         }
         */
    }
    ?>
</body>

</html>