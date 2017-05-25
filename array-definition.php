<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php

$days = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");

$cities[] = 'Harare';
$user['name'] = "David Sairai";
$cities[2] = "Gweru";

echo count($days). "<br>";

echo "<pre>";
print_r($days);
print_r($cities);
print_r($user);

echo "<prev>";

foreach ($days as $key => $day ) {
  # code...
    echo "Key : {$key} => Value : {$day} <br><br>";
}
echo "The day is {$days[5]} <br><br>";
echo "The student's name is {$user['name']} <br>";
     ?>
  </body>
  </html>
