<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - If and Else Conditional</title>
</head>

<body>
    <?php

    print "<h2>The if statement</h2>";


    $hour = date("H");

    if ($hour < "18") {
        print("Have a good day!");
    }

    print "<h2>The if..else statement</h2>";

    //Conditional with logical operator
    if ($hour > "9" && $hour < "18") {
        print("Have a good day!");
    } else {
        print("Have a good night!");
    }


    print "<h2>The if..elseif..else statement</h2>";

    if ($hour > "6" && $hour < "12") {
        print "Have a good morning";
    } elseif ($hour > "12" && $hour < "18") {
        print "Have a good aftenoon";
    } else {
        print "Have a good nigh";
    }


    ?>
</body>

</html>