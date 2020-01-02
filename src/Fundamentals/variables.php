<?php
    /*
        Variable Nomenclature:
            - start with a letter or _
            - have no special characters like + - ~ ^. etc
            - can count numbers in the middle or end of the name,but not in the beginning.
        When assigning or reading, don't forget the $   
    */

    // Data Types Integer 
    $numberDecimal = 10;    // mode decimal
    $numberOctal = 010;   // mode octal
    $numberHexa = 0x11;  // mode hexadecimal
    echo " $modeDecimal $modeOctal $modeHexa ";
    echo "<br>";
    echo "<hr>";

    // Data Types Float
    $numberDecimal = 0.125; // decimal number default
    $numberDecimal = .125;  // decimal number variance representation
    $numberExponent = 2e10;  // exponent mode
    echo " $nd $nv $ne ";
    echo "<br>";
    echo "<hr>";
    
    // Data Types String
    $s1 = "I'm a text";        // Double quotes
    $s2 = 'other text';        // Single quotes
    $s3 = "variavel s1 = $s1";   // show contente of s1
    $s4 = 'variavel s1 = $s1';   // show 's1' - with single quotes
    echo "$s1";
    echo "<br>";
    echo "$s2";
    echo "<br>";
    echo "$s3";
    echo "<br>";
    echo "$s4";
    echo "<br>";
    echo "<hr>";
    // Data Types boolean
    $b1 = true;     // true or TRUE or TRue, it makes no difference
    $b2 = TRUe;     // true or TRUE or TRue, it makes no difference
    $b3 = false;    // false or FALSE..., etc, it makes no difference
    $b4 = FALSE;    // false or FAlse..., etc, it makes no difference
    echo "b1 = $b1 "."<br>";
    echo "b2 = $b2 "."<br>";
    echo "b3 = $b3 "."<br>"; // false is empty 
    echo "b4 = $b4 "."<br>"; // false is empty
    echo "<hr>";
?>
