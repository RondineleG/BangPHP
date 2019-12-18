<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - File Handling</title>
</head>

<body>
    <?php

    print "<h2>readfile() function</h2>";
    print readfile("webdictionary.txt");

    print "<h2> File Open/Read/Close</h2>";
    //open
    $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    //read
    print fread($myFile, filesize("webdictionary.txt"));
    //close
    fclose($myFile);    

    print "<h2>Read Single line fgets()</h2>";

    //open
    $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    //read one line
    print fgets($myFile, filesize("webdictionary.txt"));
    //close
    fclose($myFile);  
  

    ?>
</body>

</html>