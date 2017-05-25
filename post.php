<!doctype html>
<html>
<head>
    <title>Source Code</title>
</head>
<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

      <input type="text" name="firstname" placeholder="First Name"><br><br>
      <input type="text" name="lastname" placeholder="Last Name"><br><br>
      <input type="text" name="email" placeholder="Email"><br><br>
      <input type="text" name="phone" placeholder="Phone"><br><br>
      <input type="text" name="postcode" placeholder="Postcode"><br><br>
      <input type="submit" value="Sign Up!"><br><br>
</form>
<?php
  //check if form has been submitted
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //PRINT OUT the struture of the $post global
    echo "<pre>"; print_r($_POST); echo "<pre>";


  //check for empty fields
  if(empty($_POST['email']) || empty($_POST['firstname'])){

    echo "All fields are required!!! <br>";
  }
}

 ?>
  </body>
  </html>
