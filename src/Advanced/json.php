<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Json</title>
</head>

<body>
    <?php
      print "<h2>json_encode()</h2>";
      $age = array ("Rondinele"=>27, "Beatriz"=>4,"Gabriela"=>26);

     print(json_encode($age));
     
    ?>
</body>

</html>