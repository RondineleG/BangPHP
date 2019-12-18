<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Forms</title>
</head>

<body>
<?php
    print "<h2>html form using post method</h2>";

    ?>
    <form action="welcome.php" method="POST">
        Name : <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

   <?php
    print "<h2>html form using get method</h2>";

    ?>
    <form action="welcome.php" method="GET">
        Name : <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    
</body>

</html>