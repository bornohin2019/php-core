<?php
session_start();
if(!isset($_SESSION["rname"])){
    header("location:main.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>
<body>
    <section>
        <form action="" method="POST">
            <h1>Filup Your Information</h1>
            <div>
                <label for="">User Name:</label>
                <input type="text" name="txtUsername">
            </div>
            <div>
                <label for="">Password:</label>
                <input type="password" name="txtPassword">
            </div>
            <div>
                <button type="submit" name="btnSubmit">Login</button>
                   <a href="logout.php">Logout</a>
            </div>
        </form>
    </section>
</body>
</html>