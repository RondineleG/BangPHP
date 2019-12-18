<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Loop while</title>
</head>

<body>
    <?php
    print "<h2>while loop</h2>";

    $i = 1;

    while ($i <= 18) {
        print "The number is : $i <br>";
        $i++;
    }


    while ($i <= 100) 
    {

        print "<b>The number is : $i<b> <br>";
        $i += 10;
    }

   $i = 1;

   //loop with logical operator
    while ($i > 0 &&  $i <= 50)
    {

        print "Count : $i<b> <br>";
        if ($i == 10) {
            print "<b>The number: $i break loop<b> <br>";
            break;
        }
        $i++;
           }

           while ($i > 0 ||  $i <20)
           {
       
               print "Count : $i<b> <br>";
               if ($i == 10) {
                   print "<b>The number: $i break loop<b> <br>";
                   break;
               }
               $i++;
                  }
    ?>
</body>

</html>