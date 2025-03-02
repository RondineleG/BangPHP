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

        //a oublic function(default value)
        function set_name($n)
        {
            $this->name = $n;
        }
        //a protected function
       protected function set_color($n)
        {
            $this->color = $n;
        }
        //a private function
      private function set_weight($n)
        {
            $this->weight = $n;
        }
    }

    $mango = new Fruit("","");
    $mango->name = "Mangos"; // ok
    #$mango -> color = "Yellow"; //error
    #$mango -> weight = "300"; //error

    echo ($mango->name);
    ?>
</body>

</html>