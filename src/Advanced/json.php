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
    $age = array("Rondinele" => 27, "Beatriz" => 4, "Gabriela" => 26);

    print(json_encode($age));

    print "<h2>json_decode()</h2>";

    $json = '{"Rondinele":27,"Beatriz":4,"Gabriela":26}';

    var_dump(json_decode($json));
    print("<br>");
    //array associative
    var_dump(json_decode($json,true));
    print("<br>");
    //To upper
    var_dump(json_decode(strtolower($json)));
    print("<br>");
    //To upper
    var_dump(json_decode(strtoupper($json)));


    ?>
</body>

</html>