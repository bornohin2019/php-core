<?php
    session_start();

    if(isset($_POST['btnSubmit'])){
        $userName = $_POST['username'];
        $userPassword = $_POST['password'];
    

        $file = file('store.txt');

        foreach($file as $singleData){
            list($storeUser, $storePassword)= explode(',', trim($singleData));

            if($userName == $storeUser && $userPassword == $storePassword){
                $_SESSION['mySession']=$userName;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <!-- Show a massage -->
        <?php
           echo isset($msg)?$msg:' ';
        ?>

        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="btnSubmit">Login</button>
            <p class="forgot-password"><a href="#">Forgot password?</a></p>
        </form>
    </div>
</body>
</html>
