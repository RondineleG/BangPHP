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

    print "<h2>Check End-Of-Lif feof()</h2>";

    //open
    $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    //read one line

    while (!feof($myFile)) {
        print fgets($myFile) . "<br>";
    }
    //close
    fclose($myFile);

    print "<h2>Check single caracter fgetc()</h2>";

    //open
    $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    //read one line

    while (!feof($myFile)) {
        print fgetc($myFile) . "<br>";
    }
    //close
    fclose($myFile);

    print "<h2>fwrite()</h2>";

    print "<h2>Write to file .txt </h2>";
    //open
    $myFile = fopen("newfile.txt", "w") or die("Unable to open file!");
    //write
    print $txt = " Rondinele Guimaraes" . "\n";
    fwrite($myFile, $txt);
    print $txt = " Beatriz Oliveira" . "\n";
    fwrite($myFile, $txt);
    //close
    fclose($myFile);

    print "<h2>Write to file .json </h2>";

    //open
    $newFile = fopen("newfile.json", "w") or die("Unable to open file!");
    //write
    print $txt = " Gabriela Guimaraes " . "\n";
    fwrite($newFile, $txt);
    print $txt = " Janaina Oliveira " . "\n";
    fwrite($newFile, $txt);
    //close
    fclose($newFile);

   
    print "<h2>Read json()</h2>";

    //open
    $newFile = fopen("newfile.json", "r") or die("Unable to open file!");
    //read one line

    while (!feof($newFile)) {
        print fgets($newFile) . "<br>";
    }
    //close
    fclose($newFile);


    print "<h2>Read txt()</h2>";

    //open
    $myFile = fopen("newfile.txt", "r") or die("Unable to open file!");
    //read one line

    while (!feof($myFile)) {
        print fgets($myFile) . "<br>";
    }
    //close
    fclose($myFile);

    
    ?>
</body>

</html>