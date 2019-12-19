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

    $int = 100.55;
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        print("Integer is valid");
    } else {
        print("Integer is not valid");
    }
    ?>

    <?php
    print "<h2>filter_var() and problem with 0</h2>";

    $int = 0;
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 ||
        !filter_var($int, FILTER_VALIDATE_INT) == false) 
    {
        print("Integer is valid");
    } 
    else
    {
        print("Integer is not valid");
    }

    ?>
</body>

</html>