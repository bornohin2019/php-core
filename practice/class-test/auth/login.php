<?php
session_start();
if(isset($_POST['btnSubmit'])){
    $usarName = $_POST['usar'];
    $mail= $_POST['mail'];
    $emailPattern = "/^[^ ]+@\.+[a-zA-Z]{2,4}$/";
    $password = $_POST['password'];

     if (!preg_match($emailPattern, $mail)) {
        echo "<br><br><b>Invalid email address.</b><br><br>";
     }
     else{
        echo "<br> type valid mail <br>";
     }


    $file= file('store.txt');

    foreach($file as $singledata){
        list($storeName, $storePassword)=explode(",",trim($singledata));
                               
       if($usarName==$storeName && $password==$storePassword){
            $_SESSION['mySession']= $usarName;
            header('location:demo.php');
       }
       else{
        $msg= "Usar Name Or Password Incorect";
       }
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="post">
        <h1>Login</h1>
        <?php
        echo isset($msg)?$msg:' ';
        ?>
        <div>
            <label for="">user-name:</label>
            <input type="text" name="usar">
        </div>
        <br>
        <div>
                    <label for="">mail:</label>
                    <input type="text" name="mail">
        </div>
        <br>
        <div>
            <label for="">password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Login" name="btnSubmit">
        </div>
    </form>
</body>
</html>