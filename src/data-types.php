<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Data Types</title>
</head>

<body>
    <?php
       echo "<h2>String</h2>";

       # this is a declaration of string 

       $fistName = "Rondiele";
       $lastName = "Guimarães";
       $aboutMe = "<p>I'm studying, i really this area,<br>
        i don't understand everything very well. But my persistence is very
        high,<br> so let's write a lot of code.</p>
        ";
       echo $aboutMe;
       print "Author : ";
       //concatenations strings using "."
       echo $fistName."".$lastName; 
       print "<br>";
   

    ?>
</body>

</html>