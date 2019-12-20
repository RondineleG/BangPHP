<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP - Static Methods</title>
</head>

<body>
    <?php

    class greeting
    {
        public static function Welcome()
        {
            echo "Hello World!";
        }

        public function __construct()
        {
            self::Welcome();
        }
    }
    class SomeOtherClass
    {
        public function message()
        {
            greeting::Welcome();
        }
    }
    // Call static method

    greeting::Welcome();
    print "<br>";
    new greeting();

    class domain {
        protected static function getWebsiteName() {
          return "W3Schools.com";
        }
      }
      
      class domainW3 extends domain {
        public $websiteName;
        public function __construct() {
          $this->websiteName = parent::getWebsiteName();
        }
      }
      print"<br>";
      $domainW3 = new domainW3;
      echo $domainW3 -> websiteName;
    
    ?>
</body>

</html>