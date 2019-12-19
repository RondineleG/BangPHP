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
    print "Favorite animal is " . $_SESSION["favanimal"] = "dog";
    ?>
</body>

</html>