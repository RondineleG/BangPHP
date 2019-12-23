<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Prepared Statements</title>
</head>

<body>
    <?php
    print("<h2>Prepared Statements</h2>");

    $severname = "localhost";
    $username = "username";
    $password = "password";
    $db = "bname";

    // Create connection PDO
    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // set the pdo error mode to excption
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //prepare sql and bind parameters
        $stmt = $connection->prepare("INSERT INTO MyTable (firstname, lastname, email)
         VALUES(:fisrtname, :lastname, :email)
         ");

        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam('lastname', $lastname);
        $stmt->bindParam('email', $email);

        //insert first row
        $firstname = "Rondinele";
        $lastname = "Guimarães";
        $email = "rondineleg@gmail.com";
        $stmt->execute();

        //insert second row
        $firstname = "Beatriz";
        $lastname = "Guimarães";
        $email = "biag@gmail.com";
        $stmt->execute();

        //insert third row
        $firstname = "Gabriela";
        $lastname = "Guimarães";
        $email = "gabi@gmail.com";
        $stmt->execute();

        $last_id = $connection->lastInsertId();
        print("New record  created successfully .
        Last inserted ID is : " . $last_id);
    } catch (PDOException $ex) {

        print $sql . "<br>" . $ex->getMessage();
    }

    $connection = null;

    ?>
</body>

</html>