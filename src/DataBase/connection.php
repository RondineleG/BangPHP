<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Connection to MySQL</title>
</head>

<body>
    <?php

    print("<h2><b>Connection to database</h2>");

    $servername = "localhost";
    $username = "username";
    $password = "password";

    //create connection
    $connect = new mysqli($servername, $username, $password);
    $connect = mysqli_connect($servername, $username, $password);

    //check connection
    if ($connection->connect_error || $connect->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    echo "Connected successfully";

   try {
        $connection = new PDO("mysql:host=$servername;dbnaem=mydDB", $username, $password);

        //set PDO error mode to exceptiom
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    //MySQLi Object-Oriented:

     $connect-> close();

    //  MySQLi Procedural:
     mysqli_close($connect);
    
    //PDO:
    $connection = null;
    ?>

</body>

</html>