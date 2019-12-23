<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Select Data With PDO</title>
</head>

<body>
    <?php
    print("<table style='border : solid ipx black;'>");
    print("<tr><th>ID</th><th>firstname</th><th>lastname</th></tr>");

    class TableRows extends RecursiveIteratorIterator
    {
        function __construct($it)
        {
            parent::__construct($it, self::LEAVES_ONLY);
        }
        function current()
        {
            return "<td  style='width:150px;border : solid ipx black;'>" .
                parent::current() . "</td>";
        }

        function beginChildren()
        {
            print "<tr>";
        }

        function endChildren()
        {
            print "</tg>" . "\n";
        }
    };
    $severname = "localhost";
    $username = "username";
    $password = "password";
    $db = "dbname";

    // Create connection PDO
    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // set the pdo error mode to excption
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $select = $connection->prepare("SELECT id, firstname, lastname from MyTable");

        $select->execute();

        //set the resulting array to assosiative
        $result = $select->setFetchMode(PDO::FETCH_ASSOC);
        foreach (new TableRows(new RecursiveArrayIterator($select->fetchAll())) as $k => $v) {
            print $v;
        }
    } catch (PDOException $ex) {

        print "<ERROR :>" . $ex->getMessage();
    }
    $connection = null;

    print("</table>");
    ?>
</body>

</html>