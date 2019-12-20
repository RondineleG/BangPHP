<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Filters</title>
</head>

<body>
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        <tr>

            <?php
            print "<h2>Creating filters with filter_list()</h2>";
            foreach (filter_list() as $id => $filter) {
                print '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }

            ?>
    </table>
    <?php
    print "<h2>Creating filters with filter_var()</h2>";

    $str = "<h1>Hello world!</h1>";
    $newStr = filter_var($str, FILTER_SANITIZE_STRING);
    print $newStr;

    ?>

    <?php
    print "<h2>Validate an Integer</h2>";

    $int = 0;
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        print("Integer is valid");
    } else {
        print("Integer is not valid");
    }
    ?>

    <?php
    print "<h2>filter_var() and problem with 0</h2>";

    $int = 0;
    if (
        filter_var($int, FILTER_VALIDATE_INT) === 0 ||
        !filter_var($int, FILTER_VALIDATE_INT) == false
    ) {
        print("Integer is valid");
    } else {
        print("Integer is not valid");
    }

    ?>
    <?php

    print "<h2>Validate IP Address</h2>";

    $ip = "0";
    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        print("$ip is a valid IP address");
    } else {
        print("$ip is not a valid IP address");
    }
    ?>
    <?php

    print "<h2>Sanitize and validate an email address</h2>";

    $email = "rondineleg#gmail.com";

    //remove all illegal caracters from email

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    //validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        print("$email is a valid email address");
    } else {
        print("$email is not  a valid email address");
    }

    ?>
    <?php

    print "<h2>Sanitize and validate a URLs</h2>";

    $url = "https://www..w3schools.com";

    //remove all illegal caracters from url

    $url = filter_var($url, FILTER_SANITIZE_URL);

    //validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        print("$url is a valid URL");
    } else {
        print("$url is not  a valid URL");
    }

    ?>
</body>

</html>