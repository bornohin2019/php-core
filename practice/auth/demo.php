<?php


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
            <label for="">Name:</label>
            <input type="text" name="usar">
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