<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Static Properties</title>
</head>

<body>
    <?php
         class pi{
             public static $value = 3.14159;

             public function staticValue()
             {
                 return self::$value;
             }
         }

         class x extends pi{
             public function xStatic()
             {
                 return parent::$value;
             }
         }

         //get value ofstatic property dicrectly via child class
           echo x::$value;
           echo"<br>";
         //Get static property
         echo pi::$value;
         echo"<br>";
         $pi = new pi();
         echo $pi->staticValue();

    ?>
</body>

</html>