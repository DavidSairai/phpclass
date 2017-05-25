<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php
    $country = "Zimbabwe";
    $city = "Harare";
    $code = 4532;
    $clubs = array();
    $computer = "";

    echo "Country : $country <br> City : $city  <br>";
    $x = 12;
    $y = 100;

    echo $x * $y;

    function getCity(){
      //$city = "Gweru";
      global $city;
      echo "City from function : $city <br>";
    }

    echo "<br>";

    getCity();
    echo "City from outside fucntion : $city <br>";
     ?>
  </body>
  </html>
