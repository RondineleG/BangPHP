<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Insert Data</title>
</head>

<body>
    <?php
    print("<h2>Insert Data</h2>");

    $severname = "localhost";
    $username = "username";
    $password = "password";
    $db = "bname";

    // Create connection MySQLi Object-oriented

    $connection = new mysqli($severname, $username, $password, $dbname);

    //check connnection
    if ($connection->connect_error) {
        die("Connection failed : " . $connection->connect_error);
    }

    //sql to create table
    $sql = "INSERT INTO MyTable, lastname, email) 
    VALUES ('Rondinele','Guimaraes','rondineleg@gmail.com')";

    if ($connection->query($sql) === true) {
        print "New record  created successfully";
    } else {
        print "Error  " . $sql . "<br>" . $connection->connect_error;
    }

    $connection->close();


    // Create connection MySQLi Procedural
    $connection = mysqli_connect($severname, $username, $password, $dbname);

    if (!$connection) {
        printf("Can't connect to localhost. Error: %s\n", mysqli_connect_error());
    }

    if (mysqli_query($connection, $sql)) {
        print "New record  created successfully";
    } else {
        print "Error  " . $sql . "<br>" . mysqli_error($connection);
    }
    $connection->close();


    // Create connection PDO

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // set the pdo error mode to excption


        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //sql to create table
        $sql = "INSERT INTO MyTable, lastname, email) 
    VALUES ('Rondinele','Guimaraes','rondineleg@gmail.com')";

        // use exec() bacause no result are returned

        $connection->exec($sql);

        print("New record  created successfully");
    } catch (PDOException $ex) {

        print $sql . "<br>" . $ex->getMessage();
    }

    $connection = null;

    ?>
</body>

</html>