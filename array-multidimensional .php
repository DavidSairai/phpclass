s<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php
    $user = array(
      array("David Sairai", "david@sairai.co.za", "Harare"),
      array("Jane Smith", "joe@guru.co.za", "Gweru"),
      array("Sam Joe", "sam@y.com", "Norton")
        );

        echo "<pre>"; print_r($user);
        echo "Name : {$user[0][0]} <br>";

        //access values using foreach statement
          echo "<table border='1'><thead><th>Name</th><th>Email</th><th>City</th></thead><tbody>";

        foreach ($user as $key => $user ) {
          echo "<tr>";
          //loop through the elements of user Array
        foreach ($user as $key => $value) {
            echo "<td>{$value} </td>";
          }
          echo "</tr>";
        }
        echo "</tbody></table>";

     ?>
  </body>
  </html>
