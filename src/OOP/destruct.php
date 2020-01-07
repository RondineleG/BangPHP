<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Destruct</title>
</head>

<body>
    <?php
      class Fruit
      {
          public $name;

          function __construct($name)
          {
              $this -> name = $name;  
          }
          
          function __destruct()
          {
              print("The fruit is {$this-> name}");
          }           

      }

      $apple = new Fruit("Apple", "Red");
       

    ?>
</body>

</html>