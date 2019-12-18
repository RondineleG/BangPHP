<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Form Validation</title>
</head>

<body>
    <?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = testInput($_POST["name"]);
        $email = testInput($_POST["email"]);
        $website = testInput($_POST["website"]);
        $comment = testInput($_POST["comment"]);
        $gender = testInput($_POST["gender"]);
    }

    function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Form Validation</h2>
    <form method="post" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    print "<h2>Input:</h2>";
    print $name;
    print "<br>";
    print $email;
    print "<br>";
    print $website;
    print "<br>";
    print $comment;
    print "<br>";
    print $gender;
    ?>
</body>

</html>