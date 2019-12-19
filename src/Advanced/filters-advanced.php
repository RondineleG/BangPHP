<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Filters Advanced</title>
</head>

<body>
    <?php
    print "<h2>validate an integer within a range</h2>";
     
      $int = 122;
      $min = 1;
      $max = 200;

      if(filter_var($int,FILTER_VALIDATE_INT, array("options" => array("min_range" =>$min, "max_range"=>$max))) ===false)
      {
          print("Variable value is not within the legal range");

      }
      else
      {
        print("Variable value is  within the legal range");
      }

    ?>
</body>

</html>