<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Select Data</title>
</head>

<body>
    <?php
    print("<h2>Select Data</h2>");

    $severname = "localhost";
    $username = "username";
    $password = "password";
    $db = "dbname";

    // create connection

    $connection = mysqli_connect($severname, $username, $password, $db);

    // check connection

    if (!$connection) {
        die("Connection failed : " . mysqli_connect_error());
    }

    $sql = "SELECT id. firstname, lastnam FROM MyTable";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        //output data of each row

        while ($row = mysqli_fetch_assoc($result)) {
            print "id: ";
            $row["id"] . " - Name : " . $row["fistname"] .
                " " . $row["lastname"] . "<br>";
        }
    } else {
        print "0 result !";
    }
    ?>
</body>

</html>