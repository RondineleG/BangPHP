<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Insert Multiple Records</title>
</head>

<body>
    <?php
    print("<h2>Insert Multiple Records</h2>");

    $severname = "localhost";
    $username = "username";
    $password = "password";
    $db = "bname";
    // Create connection PDO

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // set the pdo error mode to excption

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
         //begin the transaction
         $connection->beginTransaction();
         // our SQL statements
         $connection->exec("INSERT INTO MyTable, lastname, email) 
        VALUES ('Rondinele','Guimaraes','rondineleg@gmail.com')");
        
        $connection->exec("INSERT INTO MyTable, lastname, email) 
        VALUES ('Rondinele','Guimaraes','rondineleg@gmail.com')");
        
        $connection->exec("INSERT INTO MyTable, lastname, email) 
        VALUES ('Rondinele','Guimaraes','rondineleg@gmail.com')");


        //commit the transactions
        $connection->commit();
    
        $last_id = $connection->lastInsertId();
        print("New record  created successfully .
        Last inserted ID is : " . $last_id);
    } catch (PDOException $ex) {

        //roll back the tansaction if something failed
        $connection->rollBack();
        print $sql . "<br>" . $ex->getMessage();
    }

    $connection = null;

    ?>
</body>

</html>