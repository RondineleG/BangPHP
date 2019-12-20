<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Create database</title>
</head>

<body>
    <?php

    print("<h2><b>Create a MySQL Database Using MySQLi and PDO</h2>");

    $servername = "localhost";
    $username = "username";
    $password = "password";

    //create connection
    $connection = new mysqli($servername, $username, $password);

    //check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connconnectionect->connect_error);
    }

    //Create database

    $sql = "CREATE DATABASE myDB";
    if ($connection->query($sql) === true) {
        echo "Database created succesfully";
    } else {
        echo " Error creating database" . $connection->error;
    }
    $connection->close();

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE myDB";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>

</body>

</html>