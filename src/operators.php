<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Operators</title>
</head>

<body>
    <?php

    print "<h2>Arithmetic Operators</h2>";

    $x = 50;
    $y = 2;
    print "The value of x is : $x <br>";
    print "The value of y is : $y <br>";
    echo"<br><br>";

    /* Operator   Name                 Example               Result 
        +         Addition             $x + $y = 52          Sum of $x and $y
        -         Subtraction          $x - $y = 48          Difference of $x and $y
        *         Multiplication       $x * $y = 100         Product of $x and $y
        /         Division             $x / $y = 25          Quotient of $x and $y
        %         Modulus              $x % $y = 0           Remainde of $x divided by $y
        **        Exponentiation       $x ** $y = 2500       Result of rainsing of $x to the $y
    */
    
    
   print " The Addition is :";
   print $x + $y;  
   echo"<br>";

   print " The Subtraction is :"; 
   print $x - $y;   
   echo"<br>";

   print " The Multiplication is :"; 
   print $x * $y;
   echo"<br>";  

   print " The Division is :"; 
   print $x / $y;
   echo"<br>"; 

   print " The Modulus is :"; 
   print $x % $y;
   echo"<br>"; 

   print " The Exponentiation is :"; 
   print $x ** $y ;
   echo"<br>";



    ?>
</body>

</html>