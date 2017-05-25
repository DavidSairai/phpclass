<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php

        $greeting = "Hey dear";
        $twister = "David is such a good programmer";

      echo strlen($greeting); echo "<br>";
      echo strlen($twister); echo "<br>";

      echo str_word_count($greeting); echo "<br>";
      echo str_word_count ($twister);echo "<br>";

      echo strrev($greeting);echo "<br>";
      echo strrev($twister); echo "<br>";
      echo strpos($twister, "g"); echo "<br>";
      echo str_replace('good',  'nasty', $twister); echo "</br>";
           ?>
  </body>
  </html>
