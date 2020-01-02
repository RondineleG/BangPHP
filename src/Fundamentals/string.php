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
    printf("<p>Lengt of 's' is : %d</p>", $i);
    echo "<hr>";

    // strtoupper()
    $name = "rondinele";
    echo "Value of name is : " . $name;
    $u = strtoupper($name);
    printf("<p>strtoupper of 'name' is : %s </p>", $u);
    echo "<hr>";

    // strtolower()
    $name = "BEATRIZ";
    echo "Value of name is : " . $name;
    $u = strtolower($name);
    printf("<p>strtolower of 'name' is : %s </p>", $u);
    echo "<hr>";

    // strpos()
    $p = "Hello world";
    $t = "D";
    $s = strpos($p, $t);
    if ($s == false)
        printf("<p>Not found</p>");
    else
        printf("<p>strpos of p is : %d </p>", $s);
    echo "<hr>";

    // stripos()
    $p = "Hello world";
    $t = "D";
    $s = stripos($p, $t);
    if ($s == false)
        printf("<p>Not found</p>");
    else
        printf("<p>stripos of p is : %d </p>", $s);
    echo "<hr>";


    // trim()
    $s = " Hello World               ";
    $t = trim($s);
    printf("<p>trim( %s ) = %s</p>\n", $s, $t);

    $s = "_______Hello World_______________";
    $t = trim($s, '_');
    printf("<p>trim( %s ) = %s</p>\n", $s, $t);
    echo "<hr>";

    // strcmp() e strcasecmp()
    $s1 = "My text";
    $s2 = "string";
    $r = strcmp($s1, $s2);
    printf("<p>strcmp( %s, %s ) = %d</p>\n", $s1, $s2, $r);
    $r = strcmp($s2, $s1);
    printf("<p>strcmp( %s, %s ) = %d</p>\n", $s2, $s1, $r);

    $s1 = "same string";
    $s2 = "same string";
    $r = strcmp($s2, $s1);
    printf("<p>strcmp( %s, %s ) = %d</p>\n", $s2, $s1, $r);

    $s1 = "Same string";
    $s2 = "same string";
    $r = strcmp($s2, $s1);
    printf("<p>strcmp( %s, %s ) = %d</p>\n", $s2, $s1, $r);

    $r = strcasecmp($s2, $s1); // ignore upper and lower case
    printf("<p>strcasecmp( %s, %s ) = %d</p>\n", $s2, $s1, $r);

  
  // explode() split string in array
  $animals  = "lion dog cat leopard girrafe ";
  $value = explode(" ", $animals); // separator is ' '
  print_r($value);




    ?>
</body>

</html>