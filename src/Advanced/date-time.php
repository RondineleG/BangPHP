<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Date and Time</title>
</head>

<body>
    <?php
    print "<h2>Date and Time</h2>";

    print "<h2>Get a date</h2>";

    print "Today is " . date("Y/m/d") . "<br>";
    print "The year is " . date("Y") . "<br>";
    print "The month is " . date("m") . "<br>";
    print "The short date is " . date("m/y") . "<br>";
    print "Today is " . date("d") . "<br>";
    print "Today is " . date("18") . "<br>";

    print "<h2>Get a time</h2>";

    print " The time is : " . date("h:i:sa") . "<br>";
    print " The hour is : " . date("h") . "<br>";
    print " The hour and minutes is : " . date("h:i") . "<br>";
    print "Only minutes : " . date("i") . "<br>";
    print "Only seconds : " . date("s") . "<br>";

    print "<h2>Get your time zone</h2>";
    date_default_timezone_set("America/New_York");
    print " The time New York is : " . date("h:i:sa") . "<br>";

    print "<h2>Create a date with mktime()</h2>";
    $d = mktime(11, 55, 50, 12, 18, 2000);
    print "Created date is " . date("d-m-Y h:i A", $d);

    print "<h2>Create a date from string with strtotime()</h2>";
    $d = strtotime("10:30pm April 15 2020");
    print "Created date is " . date("d-m-Y h:i A", $d) . "<br>";

    $d = strtotime("tomorrow");
    print "Tomorrow is " . date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("next Saturday");
    print "Next Saturday is : " . date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("+3 Months");
    print "+3 Months is : " . date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("+1 Year");
    print "+1 Year is : " . date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("+10 Days");
    print "+1 Year is : " . date("Y-m-d h:i:sa", $d) . "<br>";

    print "<h2>Outputs the dates for the next six Saturdays</h2>";
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }
    print "<h2>Outputs the number of days until 7th of September</h2>";
    $d1 = strtotime("December 25");
    $d2 = ceil(($d1 - time()) / 60/60/ 24);
    echo "There are " . $d2 . " days until 25th of December .";
    ?>
</body>

</html>