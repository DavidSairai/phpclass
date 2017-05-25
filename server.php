<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>

    <table>
      <thead>
      <th>Key</th><th>Value</th>
      </thead>
    <tbody>

    <?php

     foreach ($_SERVER as $key => $value){
      echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
    }
    ?>
</tbody>
</table>
  </body>
  </html>
