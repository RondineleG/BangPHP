<html>
<head>
<title>Strings </title>
</head>
<body>
<?php
    $s = "Some Text";
    printf("<p>s: %s </p>\n", $s);
    
    // Concatenation  using the "."
    $s = $s . ": Concatenation...";
    printf("<p>s: %s </p>\n", $s);
    $s .=  " 1 2 3"; // s = s . "1 2 3"
    printf("<p>s: %s </p>\n", $s);

    $i = 100;
    $s = $s . ": i = $i...";
    printf("<p>s: %s </p>\n", $s);

    $s = "Numero i = " . $i . "; ";
    printf("<p>s: %s </p>\n", $s);
    

    /* Functions */

    // strlen() for count
    $s = "Hello world";
    $i = strlen($s);
   printf("<p>Lengt of 's' is : %d</p>",$i);
    echo"<hr>";

   // strtoupper()
   $name = "rondinele";
   echo "Value of name is : ". $name;
   $u= strtoupper($name);
   printf("<p>strtoupper of 'name' is : %s </p>",$u);
   echo"<hr>";  
   
   // strtolower()
   $name = "BEATRIZ";
   echo "Value of name is : ". $name;
   $u= strtolower($name);
   printf("<p>strtolower of 'name' is : %s </p>",$u);
   echo"<hr>";  
   
?>
</body>
</html>
