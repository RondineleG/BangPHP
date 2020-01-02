<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP</title>
    <style>
        h1 {
            text-align: center;
            padding-top: 10px;
            color: green;
        }
    </style>
</head>

<body>
    <h1 onclick="message()">My name is :</h1>
    <h1>Learning PHP With</h1>
    <?php
    print("<h1>wwww.w3schools.com</h1>");
    ?>

    <script>
        var name = "Hello, Rondinele";

        function message() {
            return alert(name);
        }
    </script>
</body>

</html>