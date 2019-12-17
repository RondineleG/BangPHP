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

    ?>
</body>

</html>