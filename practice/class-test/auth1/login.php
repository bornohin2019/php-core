<?php
session_start();


if(isset($_POST['btnSubmit'])){
  $usarName = $_POST['usar'];
  $usarPassword = $_POST['password'];

$file = file('store.txt');

        foreach($file as $singleData){
            list($storeUser, $storePassword)= explode(',', trim($singleData));

            if($usarName == $storeUser && $usarPassword == $storePassword){
                $_SESSION['mySession']=$usarName;
                header('location:demo.php');
            }
            else{
                $msg = "User Name or Password incorrect";
            }
        }
}


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <?php
        echo isset($msg)?$msg: ' ';
    ?>

  </head>
  <body>
    <form action="">
      <label for="">Login</label>
      <input type="text" name="usar" />
      <input type="password" name="password" />
      <input type="submit" value="Login" name="btnSubmit" />
    </form>
  </body>
</html>
