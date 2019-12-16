<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Strings Functions</title>
</head>

<body>
    <?php

    echo "<h4>This is a string for use in functions</h4>";
    $strTitle = "Hello, Rondinle Guimaraes";
    print $strTitle;


    print "<h2> strlen() </h2>";

    # strlen() - Return the lenght of a string

    print "The lenght is : ";
    echo strlen($strTitle);


    print "<h2> str_word_count() </h2>";

    # str_word_count() - Count words in a string 

    print "The numbers of words in a string is : ";
    echo str_word_count($strTitle);

    print "<h2> strrev() </h2>";

    # strrev() - Reverse a string

    print "The string reverse is : ";
    echo strrev($strTitle);


    ?>
</body>

</html>