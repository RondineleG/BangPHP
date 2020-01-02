<html>

<head>
    <title>PHP Functions</title>
</head>

<body>
    <?php

    // is_integer();

    $i = 1;
    $b = is_integer($i);
    echo "is_integer(i) = $b <br>";


    //is_string();

    $s = 'minha string';
    $b = is_string($s);
    echo "is_string(s) = $b <br>";


    //is_float();
    $f = 1.9;
    $b = is_float($f);
    echo "is_float(f) = $b <br>";


    //is_bool();
    $t = true;
    $b = is_bool($t);
    echo "is_bool(t) = $b <br>";

  //is_array();
  $a = [];
  $b = is_array($a);
  echo "is_array(a) = $b <br>";

  //isset()
   $v = [];
  $b = isset($v);
  echo "isset(v) = $b <br>";
  
    ?>
</body>

</html>