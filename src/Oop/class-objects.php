<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Class and Objects</title>
</head>

<body>
    <?php
    class Fruit
    {
        //properties
        public $name;
        public $color;

        //methods
        function setName($name)
        {
            $this->name = $name;
        }

        function getName()
        {
            return $this->name;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();

    $apple->setName("Banana");
    $banana->setName("Apple");

    print($apple->getName());
    print("<br>");
    print($banana->getName());


    ?>
</body>

</html>