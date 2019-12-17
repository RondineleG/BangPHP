<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Global Variables</title>
</head>

<body>
    <?php
    /*
    The PHP superglobal variables are:
       $GLOBALS
       $_SERVER
       $_REQUEST
       $_POST
       $_GET
       $_FILES
       $_ENV
       $_COOKIE
       $_SESSION    
    
    */
    $x = 75;
    $y = 25;

    print "<h2>Global Variables</h2>";

    function addition()
    {
        $GLOBALS['a'] = $GLOBALS['x'] * $GLOBALS['y'];
    }

    addition();
    print $a;

    print "<h2>PHP $_SERVER </h2>";

    print $_SERVER['PHP_SELF'];
    print "<br>";
    print $_SERVER['SERVER_NAME'];
    print "<br>";
    print $_SERVER['HTTP_HOST'];
    print "<br>";
    print $_SERVER['HTTP_REFERER'];
    print "<br>";
    print $_SERVER['HTTP_USER_AGENT'];
    print "<br>";
    print $_SERVER['SCRIPT_NAME'];

    ?>
</body>

</html>