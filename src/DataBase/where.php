<?php
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";
 
$servername = 'den1.mysql1.gear.host';
        $username = 'phpcrud';
        $password = 'Tr6XDNm~V_i7';
        $dbname = 'phpcrud'; 
        
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $result) {
        printf("ID: %s  Name: %s", $row[0], $row[1]);  
    }
  
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
