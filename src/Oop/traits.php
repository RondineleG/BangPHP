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
              echo"OOP is fun";
          }
       }

       class Welcome
       {
           use message;
       }

       $obj = new Welcome();
       $obj->msg();
    ?>
</body>

</html>