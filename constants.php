<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php
      define("NAME", "David Sairai");
      define("ADDRESS", "F37 Wilgerpark, 2 Stelleberg Road");
      define("PHONE", "0748456470");

      echo ADDRESS; echo "<br>";

      function userinfo()
      {
        echo "Name: " .NAME . "<br>";
        echo "Address :" .ADDRESS. "<BR>";
      }
        userinfo();
     ?>
  </body>
  </html>
