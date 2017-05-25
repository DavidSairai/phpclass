<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php

    $request_type = "any record";
    switch ($request_type) {

    case 'create':
    echo "This is a create query";
        break;

    case 'read':
      echo "This is read query";
      break;

    case 'update':
      echo "This updates the query!!";
      break;
      default:
      echo "This is so screwed!!!";
    }
     ?>
  </body>
  </html>
