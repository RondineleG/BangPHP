<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Switch</title>
</head>

<body>
    <?php
      $favoriteColor = "blaco";

      print"<h2>The switch statement</h2>";
      
      switch($favoriteColor)
      {
          case "blue" :
            print "Your favorite color is Blue";
          break;

          case "green":
            print "Your favorite color is Yellow";
          break;

          case "red":
            print "Your favorite color is Red";
          break;

          default :
          print "Your favorite is not defined";


      }
    
    ?>
</body>

</html>