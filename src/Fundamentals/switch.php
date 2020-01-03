<html>
<head>
<title> switch </title>
</head>
<body>

<?php
    $favoriteColor = "red";

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
