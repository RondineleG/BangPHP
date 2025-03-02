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
    $connectionProcedural = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$connectionProcedural) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE myDB";
    if (mysqli_query($cconnectionProceduralonn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($connectionProcedural);
    }

    mysqli_close($conconnectionProceduraln);

    try {
        $connectionPDO = new PDO("mysql:host=$servername", $username, $password);
        // set the PDO error mode to exception
        $connectionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE myDBPDO";
        // use exec() because no results are returned
        $connectionPDO->exec($sql);
        echo "Database created successfully<br>";
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null;

    ?>

</body>

</html>