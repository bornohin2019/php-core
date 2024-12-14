<?php
session_start();
if(isset($_POST['btn'])){
$usar = $_POST['mail'];
$pass = $_POST['pass'];
$file = file('store.txt');
foreach($file as $singleData){
  list($usarN, $passN) = explode(',', trim($singleData));
  if($usar==$usarN && $pass==$passN){
    $_SESSION['mySession']=$usar;
    header('location:main.php');
  }
  else{
    $msg = 'usar and password invalid';
  }
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
  </head>
  <body>
    <form action="" method="post">
      <label for="">Filup Your Information</label><br>
      <input type="text" name="mail" /><br>
      <input type="password" name="pass" /><br>
      <button type="submit" value="submit" name="btn">Login</button>

      <?php
echo isset($msg)?$msg:"";
      ?>
    </form>
  </body>
</html>
