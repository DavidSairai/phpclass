<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>
    <?php

    $user = array();

    echo "<<pre>"; print_r($user);

    //assign values to array
    $user['name'] = "David Sairai";
    $user['phone'] = '0748456470';
    $user['password'] = 'root';

    print_r($user);

    //how to access eleemnts of an associative array
    echo "Name : {$user['name']} <br>";

    //chamnge value of ass array
    $user['name'] = "Tendai Sairai";
    print_r($user);

    //use for each statement to access ass array
    foreach ($user as $key => $value) {
      echo "{$key} : {$value} <br>";
    }

    //sort as array contents
    //by value
    asort($user); print_r($user);

    //reverse order
    arsort($user); print_r($user);

    //by key
    ksort($user); print_r($user);

    //by desc order
    krsort($user); print_r($user);
     ?>
  </body>
  </html>
