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



?>

</body>
</html>
