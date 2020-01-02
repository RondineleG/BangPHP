<html>

<head>
    <title> Arrays </title>
</head>

<body>
    <?php

    $myArray =  array(10,33, 55, 100, 22, 22, 33, 55);
 
    echo count($myArray);
    echo '<hr>';
    var_dump($myArray);
    echo '<hr>';
    asort($myArray);

    var_dump($myArray);
    echo '<hr>';
    print_r($myArray);
    echo '<hr>';

    $newArray= [10, 100, 22, 22, 33, 55, "Name"];
    $newArray[6] = "Rondinele";
    var_dump($newArray);
    echo '<hr>';
    rsort($newArray);
    foreach($newArray as $key => $value)
    {
     echo $key ." : ".$value."<br>";
    }
    echo '<hr>';
    var_dump($newArray);
    echo '<hr>';
    print_r($newArray);
    echo '<hr>';

    echo "Index of arrar : $newArray[0]";

    echo '<hr>';
    $peoples = ["Rondinele"=>27, "Gabriela"=>26];

    foreach($peoples as $key => $value)
    {
       echo "Name is : ". $key ." and age is : ".$value."<br>";
    }

    echo '<hr>';
    $a = [];

    $a[0] = [1,2,3];
    $a[1] = [0=>10,1=>20,2=>30];
    $a[2] = ["a"=>"a","b"=>"b"];
    var_dump($a);

    echo '<hr>';

    $students ["joao"] = ["age"=>20,"father"=>"Joaquin","City"=>"SP"];
    var_dump($students);

    $students ["Maria"] = ["age"=>40,"father"=>"Manoel","City"=>"Minas"];
    var_dump($students);
    
    $students["joao"]["age"] = 20;
    $students["joao"]["father"] = "Joaquin";
    $students["joao"]["City"] = "SP";
    var_dump($students);

    $students["Abel"]["age"] = 30;
    $students["Abel"]["father"] = "Jose";
    $students["Abel"]["City"] = "Rio";
    var_dump($students);

    echo '<hr>';

    echo"Age Abel " . $students["Abel"]["age"];
    ?>
</body>

</html>