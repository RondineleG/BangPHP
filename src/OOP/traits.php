<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Traits</title>
</head>

<body>
    <?php
    trait message
    {
        public function msg()
        {
            echo "OOP is fun";
        }
    }
    trait message2
    {
        public function msg2()
        {
            echo "OOP reduces code duplication!";
        }
    }
    class Welcome
    {
        use message;
    }
    class Welcome2
    {
        use message, message2;
    }

    $obj = new Welcome();
    $obj->msg();
    echo"<br>";


    $obj2 = new Welcome2();
    $obj2->msg();
    echo"<br>";
    $obj2->msg2();
    ?>
</body>

</html>