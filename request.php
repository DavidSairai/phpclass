<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>

  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">


  <input name="email" type="email" placeholder="Email Address"><br><br>
  <input type="password" name="password" placeholder="Password"><br><br>
  <input type="submit" value="Login"><br><br>

  </form>
    <?php

//check for equest method

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  //print out the structire of the whole array
  echo "<pre>"; print_r($_REQUEST); echo "<prev>";
  //print out the user information
  echo "Name : {$_REQUEST['email']} <br> Password : {$_REQUEST['password']} <br>";
}

     ?>
  </body>
  </html>
