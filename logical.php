<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php

    $monday = true; $weekend = false; $sick = true; $exams = false;

    //AND
    echo $monday AND $sick; echo "<br>";
    echo $monday AND $exams; echo "<br>";

    //OR
    echo $monday OR $sick; echo "<br>";
    echo $weekend OR $exams; echo "<br>";

    //XOR
    echo $monday AND $sick; echo "<br>";
    echo $monday AND $exams; echo "<br>";
    echo $weekend AND $exams; echo "<br>";

     ?>
  </body>
  </html>
