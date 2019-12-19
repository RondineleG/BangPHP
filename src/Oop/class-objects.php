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
    print "<h2>Creating class and objects</h2>";
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

    $orange = new Fruit();

    $orange->name = "Orange";
    $orange->color = "Yellow";

    $apple->set_name("Apple");
    $apple->set_color("Red");
    $banana->set_name("Banana");
    $banana->set_color("Red");

    print("Name : " . $apple->get_name());
    print("<br>");
    print("Color : " . $apple->get_color());
    print("<br>");
    print("Name : " . $banana->get_name());
    print("<br>");
    print("Color : " . $banana->get_color());
    print("<br>");
    print("Name : " . $orange->get_name());
    print("<br>");
    print("Color : " . $orange->get_color());


    print "<h2>instanceof</h2>";

    $grape = new Fruit();

    var_dump($grape instanceof Fruit);

    ?>
</body>

</html>