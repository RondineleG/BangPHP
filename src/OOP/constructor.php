<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Constructor</title>
</head>

<body>
    <?php
      
       class Fruit
       {
           public $name;
           public $color;

           function __construct($name, $color)
           {
               $this -> name = $name;  
               $this -> color = $color;   
           }

           function get_name()
           {
               return $this->name;
           }
           function get_color()
           {
               return $this->color;
           }

       }

       $apple = new Fruit("Apple","Red");
       print ("Name :". $apple->get_name());
       print("<br>");
       print ("Color :". $apple->get_color());

    ?>
</body>

</html>