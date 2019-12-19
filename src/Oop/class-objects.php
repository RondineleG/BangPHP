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

        function set_name($name)
        {
            $this->name = $name;
        }

        function get_name()
        {
            return $this->name;
        }

        function set_color($color)
        {
            $this->color = $color;
        }

        function get_color()
        {
            return $this->color;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();

    $apple->set_name("Banana");
    $banana->set_name("Apple");

    print($apple->get_name());
    print("<br>");
    print($banana->get_name());


    ?>
</body>

</html>