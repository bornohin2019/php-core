<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <form action="">
      <label for="">Login</label>
      <label for="">Name:</label>
      <input type="text" name='name'>
      <label for="">Password:</label>
      <input type="password" name="password" />

      <input type="submit" value="Login" name="btnSubmit" />
    </form>
  </body>
</html>