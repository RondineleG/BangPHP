<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP -  Date and Time</title>
</head>

<body>
    <?php
    print"<h2>Date and Time</h2>";

    print"<h2>Get a date</h2>";

    print "Today is " . date("Y/m/d") ."<br>";
    print "The year is " . date("Y") ."<br>";
    print "The month is " . date("m") ."<br>";
    print "The short date is " . date("m/y") ."<br>";
    print "Today is " . date("d") ."<br>";
    print "Today is " . date("18") ."<br>";

    print"<h2>Get a time</h2>";
    
    print" The time is : " . date("h:i:sa")."<br>";
    print" The hour is : " . date("h")."<br>";
    print" The hour and minutes is : " . date("h:i")."<br>";
    print"Only minutes : " . date("i")."<br>";
    print"Only seconds : " . date("s")."<br>";
   
    

    ?>
</body>

</html>