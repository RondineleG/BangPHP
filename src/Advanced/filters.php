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
</body>

</html>