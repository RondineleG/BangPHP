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
     $connection = new mysqli($servername,$username,$password);
     $connect = mysqli_connect($servername,$username,$password);
     
     //check connection
     if($connection -> connect_error || $connect -> connect_error)
     {
         die("Connection failed: " . $connection->connect_error);
     }
     echo"Connected successfully";
     ?>
 
</body>

</html>