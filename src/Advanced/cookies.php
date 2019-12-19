<!DOCTYPE html>

<?php
$cookieName = "user";
$cookieValue = "Rondineele";
setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/"); //86400 = 1 day

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Cookies</title>
</head>

<body>
    <?php
    print "<h2>Create/Retrieve a Cookie</h2>";
    if (!isset($_COOKIE[$cookieName])) 
    {
        print "Cookie named " . $cookieName . "is not set!";
    } else
    {
        print "Cookie " . $cookieName . " is set!<br>";
        print "Value is : " . $_COOKIE[$cookieName] ;
    }
    ?>
</body>

</html>