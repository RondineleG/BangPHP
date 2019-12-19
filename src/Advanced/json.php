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
    var_dump(json_decode($json, true));
    print("<br>");
    //To upper
    var_dump(json_decode(strtolower($json)));
    print("<br>");
    //To upper
    var_dump(json_decode(strtoupper($json)));

    print "<h2>Accessing the Decoded values</h2>";

    $json = '{"Rondinele":27,"Beatriz":4,"Gabriela":26}';
    $obj = json_decode($json);
    $arr = json_decode($json, true);

    print($obj->Rondinele . "<br>");
    print ($obj->Beatriz) . "<br>";
    print ($obj->Gabriela) . "<br>";
    print("<br>");
    print($arr["Rondinele"] . "<br>");
    print($arr["Beatriz"] . "<br>");
    print($arr["Gabriela"] . "<br>");

    print "<h2>Looping throught the values</h2>";

    print("Show of object <br>");
    print("<br>");
    foreach ($obj as $key => $value) {
        print($key . " -> " . $value . "<br>");
    }
    print("Show of array <br>");
    print("<br>");
    foreach ($arr as $key => $value) {
        print($key . " -> " . $value . "<br>");
    }
    ?>
</body>

</html>