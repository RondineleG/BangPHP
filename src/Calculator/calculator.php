
<?php
    $result = 0;
    if (isset($_POST) && isset($_POST["operation"])) {
        switch ($_POST["operation"]) {
            case "sum":
                $result = $_POST["n1"] + $_POST["n2"];
                break;
            case "sub":
                $result = $_POST["n1"] - $_POST["n2"];
                break;
            case "div":
                $result = $_POST["n1"] / $_POST["n2"];
                break;
            case "mul":
                $result = $_POST["n1"] * $_POST["n2"];
                break;
        }
    }
?>
