<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php
    function IsEven($number)
    {
      //divde number by 2
      if($number % 2 == 0)
      {
        //return correct
        return true;
      }
        else {

        return false;
        }
      }
      //check if number type
      $type = IsEven(66);

      //print out result
      if ($type == true) {
        echo "The number is even <br>";
      }
      else {
        echo "The number is odd <br>";
      }
      //check if number type
      $type = IsEven(33);

      //print out result
      if ($type == true) {
        echo "The number is even <br>";
      }
      else {
        echo "The number is odd <br>";
      }



     ?>
  </body>
  </html>
