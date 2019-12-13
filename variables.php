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
         $l = 10;
         echo "<p> Variable x inside function is : $l</p>";
     }

     myTest();

     echo "<p> Variable x outside function is : $x</p>";

     function myTestGlobal()
     {         
         global $x, $y;

         $y = $x + $y + 1;
     }

     myTestGlobal();
     echo $y;
     echo "<p> Variable x outside function is : $y</p>";


     function testGlobal()
     {
        
        $GLOBALS['y'] = $GLOBALS ['x'] * $GLOBALS['y'];
       

     }

     testGlobal();
     echo "<p> Variable in global function is : $y</p>";
     echo $y;

     function staticFunction()
     {
        static $x = 0;
        echo $x;
        $x++;
     }
     echo "<p> static Keyword : </p>";
     
     staticFunction();
     staticFunction();
     staticFunction();
     staticFunction();
     staticFunction();
     staticFunction();
     staticFunction();
     staticFunction();

   
?>
</body>
</html>