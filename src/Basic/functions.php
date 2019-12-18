<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Functions</title>
</head>

<body>
    <?php

    print "<h2>Functions</h2>";

    function writeMessage()
    {
        print("Hello World");
    }
    
    // call the function
    writeMessage();

    print "<h2>Functions with arguments</h2>";
   function familyName($fName)
   {
       print("$fName <br>");
   }

   familyName("Rondinele");
   familyName("Gabriela");
   familyName("Beatriz");

   print("<br><br>");

   function familyNameYear($fName, $year)
   {
       print("$fName Born ins $year <br>");
   }

   familyNameYear("Rondinele", "1992");
   familyNameYear("Gabriela", "1993");
   familyNameYear("Beatriz",  "1992");

   print "<h2>Loosely Typed Language</h2>";

   function addNumbers(int $a, int $b)
   {    
          return $a * $b;

   }
   
   print addNumbers(5, "5");

   print"<h2>Default Argument Value</h2>";

   function setHeight(int $minheight = 50) 
   {
       echo "The height is : $minheight <br>";
   }
   
   setHeight(350);
   setHeight(); // default value of 50
   setHeight(135);
   setHeight(80);

   print"<h2>Return Value</h2>";

   function sum(int $x, int $y)
   {
       $z =  $x + $y;

       return $z;

   }

   echo "5 + 10 = " . sum(5, 10) . "<br>";
   echo "7 + 13 = " . sum(7, 13) . "<br>";
   echo "2 + 4 = " . sum(2, 4);

   print"<h2>Return Type declarations</h2>";

   function myNumber(float $a, float $b) : float
   {
        return $a + $b;
   }

   print myNumber(1.2, 5.2);
   print"<br>";

   function numbers(float $a, float $b) :int
   {
       return (int)($a + $b);
   }

   print numbers(1.2, 5.2);
    ?>
</body>

</html>