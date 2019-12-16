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
    echo "<br><br>";

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
    echo "<br>";

    print " The Subtraction is :";
    print $x - $y;
    echo "<br>";

    print " The Multiplication is :";
    print $x * $y;
    echo "<br>";

    print " The Division is :";
    print $x / $y;
    echo "<br>";

    print " The Modulus is :";
    print $x % $y;
    echo "<br>";

    print " The Exponentiation is :";
    print $x ** $y;
    echo "<br>";


    print "<h2>Assignment Operators</h2>";


    /* Assignment      Same As         Description 
       x = y           x = y           The left operand gets set to he value of the expression on the right
       x += y          x = x + y       Addition      
       x -= y          x = x - y       Subtraction   
       x *= y          x = x * y       Multiplication
       x /= y          x = x / y       Division      
       x %= y          x =  x % y      Modulus       
    */

    print " The Addition is :";
    print $x += $y;
    echo "<br>";

    print " The Subtraction is :";
    print $x -= $y;
    echo "<br>";

    print " The Multiplication is :";
    print $x *= $y;
    echo "<br>";

    print " The Division is :";
    print $x /= $y;
    echo "<br>";

    print " The Modulus is :";
    print $x %= $y;
    echo "<br>";

    print "<h2>Comparison Operators</h2>";

    /* Operator     Name                         Example             Result 
        ==           Equal                        $x == $y             Returns true if $x is equal to $y
        ===         Identical                    $x === $y           Returns true if $x is equal to $y, and they are of  the same type     
        !=          Not equal                    $x != $y            Returns true if $x is not equal to $y
        <>          Not equal                    $x <> $y            Returns true if $x is not equal to $y  
        !==         Not identical                $x !== $y           Returns true if $x is not equal to $y, or they are not of  the same type     
        >           Greater than                 $x > $y             Returns true if $x is greater than $y 
        <           Less than                    $x < $y             Returns true if $x is less than $y   
        >=          Greater than or equal to     $x >= $y            Returns true if $x is greater than or equal to$y  
        <=          Less than or equal to        $x <= $y            Returns true if $x is less than or equal to$y     
        <=>         Spaceship                    $x <=>$ y           Returns an integer less than, equal to, or greatear than zero,
                                                                     depending on if $x is less than, equal to, or greater than $y.     
   */

    print "Equal :";
    var_dump($x == $y);
    echo "<br>";

    print "Identical : ";
    var_dump($x === $y);
    echo "<br>";

    print "Not equal : ";
    var_dump($x != $y);
    echo "<br>";

    print "Not equal : ";
    var_dump($x <> $y);
    echo "<br>";

    print "Not identical  :";
    var_dump($x !== $y);
    echo "<br>";
    print "Greater than :";
    print $x !==   $y;
    echo "<br>";
    print "Less than  :";
    print $x !==   $y;
    echo "<br>";
    print "Greater than or equal to  :";
    print $x !==   $y;
    echo "<br>";
    print "Less than or equal to :";
    print $x !==   $y;
    echo "<br>";
    print "Spaceship :";
    print $x !==   $y;
    echo "<br>";


    print "<h2>Increment / Decrement Operators</h2>";


    /* Operators   Name                Description 
       ++$x        Pre-increment       increments $x by one, then returns $x
       $x++        Post-Increment      Retunrs  $x, then increments $x by the one      
       --$x        Pre-Decrement       Decrements $x by one, then returns $x
       $x--        Post-Decrement      Retunrs  $x, then decrements $x by the one   
    */

    

    $x = 10;    
    print "Value of x is : $x";
    echo "<br>";
    print "Pre-increment :";
    echo ++$x;
    echo "<br>";
    print "Value of x is : $x with Pre-Increment ";    
    echo "<br>";
    echo"<p></p>";

    $x = 20;  
    print "Value of x is : $x";
    echo "<br>";
    print "Post-Increment   :";
    echo $x++; 
    echo "<br>";
    print "Value of x is : $x with Post-Increment ";    
    echo "<br>";
    echo"<p></p>";

    $x = 30;  
    print "Value of x is : $x";
    echo "<br>";
    print "Pre-Decrement :";
    echo $x--; 
    echo "<br>";
    print "Value of x is : $x with Post-Decrementement ";    
    echo "<br>";
    echo"<p></p>";

    $x = 40;  
    print "Value of x is : $x";
    echo "<br>";
    print "Post-Decrement   :";
    echo --$x; 
    echo "<br>";
    print "Value of x is : $x with Post-Decrement ";    
    echo "<br>";
    echo"<p></p>";

    print "<h2>Logical Operators</h2>";


    /* Operators   Name                 Example               Description 
       and         And                  $x and $y             True if both $x and $y are true
       or          Or                   $x or $y              True if either $x or $y is true     
       xor         Xor                  $x xor $y             True if either $x or $y is true, but not both
       &&          And                  $x && $y              True if both $x and $y are true 
       ||          Or                   $x || $y              True if either $x or $y is true  
       !           Not                  !$x                   True if $x is not true 
 
    */                              
     $x = 50;
     $y = 2;

     print "Operator and : ";
     
     if($x == 50 and $y == 2)
     {
         print "This return is true, two condition is true";

     }
     echo "<br>";
     print "Operator or : ";
     if($x == 50 or $y == 20)
     {
         print "This return is true if one condition is true";

     }
     echo "<br>";
     print "Operator xor : ";
     if($x == 50 xor $y == 20)
     {
         print "This return is true if one condition is true, but not both";

     }
     echo "<br>";

     print "Operator && : ";
     
     if($x == 50 && $y == 2)
     {
         print "This return is true, two condition is true";

     }
    echo "<br>";

    print "Operator || : ";
    if($x == 50 || $y == 20)
    {
        print "This return is true if one condition is true";

    }
    echo "<br>";

    print "Operator ! : ";
    if($x !== 40 || $y == 20)
    {
        print "This return is true if one condition is not true";

    }

    ?>
</body>



</html>