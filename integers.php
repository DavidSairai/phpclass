<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php
      $x = 12;
      $y = 29;
      $z = 1273;

echo "$x * $y = ";
echo $x * $y;

echo "<br> $y + $z = ";
echo $y + $z;

echo "<br> $z - $x = ";
echo $z - $x;

echo '<br>';

$employees = 127;

$salary = 3241;

echo "Total spent on wages on emoployees in May<br>";
echo "<ul>";
echo "<li> \$employees * \$salary </li>";
echo "<li> $employees * $salary </li>";
echo "<li>$". $employees * $salary . "</li>";
echo "</ul>";

    ?>
  </body>
  </html>
