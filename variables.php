<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables in PHP</title>
</head>
<body>
<?php
     // global scope
    $txt = "Hello World  ";
    $x =5;
    $y= 10.5;
     echo $txt;
    
     $txt = " w3schools.com";
     echo "I love $txt !";

     echo " I love" . $txt . "! ";

     echo $x + $y;

     function myTest()
     {
         //local variable
         $x = 10;
         echo "<p> Variable x inside function is : $x</p>";
     }

     myTest();

     echo "<p> Variable x outside function is : $x</p>";

?>
</body>
</html>