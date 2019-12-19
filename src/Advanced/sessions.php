<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP- Sessions</title>
</head>

<body>
    <?php

    //set session variables
    print "Favorite color is " . $_SESSION["favcolor"] = "green" . "<br>";

    //modify
    print "Favorite color is " . $_SESSION["favcolor"] = "red" . "<br>";
    print "Favorite animal is " . $_SESSION["favanimal"] = "dog<br>";
    print "Print session <br>";
    print_r($_SESSION);

    //remove all session variable
    session_unset();


    //destroy the session
    session_destroy();

    ?>
</body>

</html>