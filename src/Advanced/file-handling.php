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
   
    while(!feof($myFile))
    {
        print fgets($myFile) ."<br>";

    }
    //close
    fclose($myFile);  
    
    print "<h2>Check single caracter fgetc()</h2>";

    //open
    $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    //read one line
   
    while(!feof($myFile))
    {
        print fgetc($myFile) ."<br>";

    }
    //close
    fclose($myFile); 

    print "<h2>Write to file - fwrite()</h2>";
    //open
    $myFile = fopen("newfile.txt", "w") or die("Unable to open file!");
    //write
    $txt = "Rondinele";
    fwrite($myFile, $txt);
    $txt = "Beatriz";
    fwrite($myFile, $txt);
    //close
    fclose($myFile);    
      
    ?>
</body>

</html>