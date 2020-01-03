<?php
//special arrays $_GET $_POST
$data = [];

if (count($_POST))
    $data = $_POST;
else
    $data = $_GET;

    if(count($data))
    {
        echo "<p> Name : " . $data['name'] . "</p>";
        echo "<p> Age : " . $data['age'] . "</p>";
        echo "<p> City : " . $data['city'] . "</p>";
        echo "<p> Addres : " . $data['addres'] . "</p>";
    }
    else
    {
        echo "No has data to show!!";
    }

