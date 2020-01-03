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

<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css" media="screen,projection" />
  <title>Calculator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col s8">
        <h4 class="header">My project of a simple calculator</h4>
        <div class="card horizontal">
          <div class="card-image">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <div class="row">
                <form method="POST">
                  <div class="input-field col s6">
                    <input id="n1" type="number" class="validate" name="n1">
                    <label for="n1">Number 1</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="n2" type="number" class="validate" name="n2">
                    <label for="n2">Number 2</label>
                  </div>
                  <div class="input-field col s12">
                    <button class="btn col s2 offset-s1 amber lighten-1" type="submit" name="operation" value="sum">
                      Sum
                    </button>
                    <button class="btn col s2 offset-s1 light-blue darken-3" type="submit" name="operation" value="div">
                      Division
                    </button>
                    <button class="btn col s2 offset-s1 green darken-3" type="submit" name="operation" value="mul">
                      Multiplication
                    </button>
                    <button class="btn col s2 offset-s1 red lighten-3" type="submit" name="operation" value="sub">
                      subtract
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-action">
              <a href="#">RESULT: <?php echo $result; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="./node_modules/materialize-css/dist/js/materialize.min.js"></script>
</body>

</html>