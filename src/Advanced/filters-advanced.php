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

    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
        print("Variable value is not within the legal range");
    } else {
        print("Variable value is  within the legal range");
    }

    print "<h2>validate IPv6 address</h2>";

    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370";

    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        print("$ip  is a valid IPv6 addres");
    } else {
        print("$ip  is not a valid IPv6 addres");
    }

    print "<h2>validate URL - Must contain querystring</h2>";

    $url = "https://ww.w3schools.com";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        print("$url is a valid URL with query string");
    } else {
        print("$url is not  a valid URL with query string");
    }

    print "<h2>Remove Characters With ASCII Value</h2>";

    $strValue = "<h1>Hello  WorldÆØÅ!</h1>";

    $strNewValue = filter_var($strValue, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    print($strNewValue);

    ?>
</body>

</html>