<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Loop Do While</title>
</head>

<body>
    <?php
       
       print"<h2>Loop do while</h2>";

    $x=1;
      do{
          print"The number is : $x <br>";
          $x++;

      } while($x <=10);
      echo"<br>";

      print"Do While wiht logical operator <br><br>"; 
      $x=1;

      do{
          print"The number is : $x <br>";
          $x++;

      } while($x >0 && $x <15);
    
    ?>
</body>

</html>