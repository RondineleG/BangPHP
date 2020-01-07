<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Abstract Class</title>
</head>

<body>
    <?php

    //Parent class
    abstract class Car
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        abstract public function intro(): string;
    }

    //Child classes

    class Audi extends Car
    {
        public function intro(): string
        {
            return "Choose German quality! I'm an $this->name!";
        }
    }


    class Volvo extends Car
    {
        public function intro(): string
        {
            return "Proud to be Swedish! I'm a $this->name!";
        }
    }


    class Citroen extends Car
    {
        public function intro(): string
        {
            return "French extravagance! I'm a $this->name!";
        }
    }

    //create objects from the child classes

    $audi = new Audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new Volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";
    $citroen = new Citroen("Citroen");
    echo $citroen->intro();
    echo "<br>";

    abstract class ParentClass
    {
        //abstract method with an argument

        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass
    {

        //optional arguments
        public function prefixName($name, $separator = ".", $greeet = "Deear")
        {
            if ($name == "John Doe") {
                $prefix = "Mr";
            }
            elseif($name == "Jane Doe")
            {
                 $prefix = "Mrs";
            }
            else
            {
                $prefix="";
            }
          return"{$greeet} {$prefix}{$separator}{$name}";
        }
    }

    $class = new ChildClass;

    echo $class -> prefixName("John Doe");
    echo"<br>";
    echo $class -> prefixName("Jane Doe");
    ?>
</body>

</html>