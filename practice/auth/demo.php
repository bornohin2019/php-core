<?php
session_start();
if(!isset($_SESSION['mySession'])){
    header('location:login.php');
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
        <h1>Filup Your Information</h1>
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
            <a href="logout.php">Logout</a>
        </div>
    </form>
</body>
</html>