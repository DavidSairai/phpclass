<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php

      $brands = array("HP", "Sony", "Samsung");

      //echo "<br>";

      echo "<pre>"; print_r($brands);
      echo count($brands);
      echo $brands[2];
      echo "<br>";
      $brands[1] = "Dell";
      print_r($brands);

      //access by foreach statement
      foreach ($brands as $key => $value) {
        echo "Key : {$key} => {$value} <br>";


      }
      echo "<br>";
        //access by foreach statement
        foreach ($brands as $brandName) {
          echo "Computer is : {$brandName} <br>";


      }
echo "<br>";
      //access using a for loop
      $arrLength = count($brands);


      for($i = 0; $i < $arrLength; $i++){
        echo "Value = {$brands[$i]} <br>";
      }

      //sorting numeric arrays
echo "<br>";
      sort($brands);
      print_r($brands);

    //srotin desc order

    rsort($brands); print_r($brands);

    $numbers = array(4, 7, 5, 6, 1, 9);
    print_r($numbers);

    sort($numbers);
    print_r($numbers);

    rsort($numbers);
    print_r($numbers);

     ?>
  </body>
  </html>
