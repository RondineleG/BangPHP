<html>
<head>
    <title> Arrays Operations </title>
</head>
<body>
<?php
     $myArray =[20.30,20,20.50,50,60];
     $myArray[] = 90;
     $myArray[7] = 100;

     // count()

     var_dump( $myArray);
     $c = count($myArray);
     echo "Lenght is : " . $c;

     echo"<hr>";

     //isset()

     $b = isset($myArray[5]);
     echo ' isset($myArray[5] is : ';
      var_dump($b);

      echo"<hr>";

      //array_keys()

      $arryKeys = array_keys($myArray);
      echo (' array_keys($myArray) is : ');
      var_dump($arryKeys);

      echo"<hr>";
      $Keys2 = ["Name:"=>"Rodinele", "Age:"=>"27"];
      $arryKeys2 = array_keys($Keys2);
      echo (' array_keys2($myArray) is : ');
      var_dump($arryKeys2);

      echo"<hr>";

      //array_merge()

      $array1 = array("Red","Green");
      $array2 = array("Blue","White");

      $r = array_merge($array1, $array2);

      echo (' array_merge($a1, $a2) is : ');
      var_dump($r);


      echo"<hr>";

      //array_fill()

      $a1 = array_fill(0,4,"Blue");
      echo (' array_fill(0,4,"Blue") is : ');
      var_dump($a1);

?>

</body>
</html>
