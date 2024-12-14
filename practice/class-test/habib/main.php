<?php
session_start();  

if (isset($_POST['btnSubmit'])) {
    $id = $_POST['trainID'];
    $name = $_POST['trainName'];

    
    $id = htmlspecialchars($id);
    $name = htmlspecialchars($name);

    
    if ($id == "100" && $name == "Badon") {
        $_SESSION['rname'] = $name;  
        header("Location: demo.php"); 
        exit(); 
    } else {
        $msg = "Error: Invalid TrainID or TrainName."; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            max-width: 300px;
            margin: 0 auto;
        }
        div {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        input[type="submit"] {
            padding: 8px 16px;
            margin-top: 10px;
            cursor: pointer;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h2>Login Form</h2>
    <?php 

    if (isset($msg)) {
        echo "<p class='error'>$msg</p>";
    }
    ?>
    <form action="#" method="post">
        <div>
            <label for="trainID">TrainID</label><br>
            <input type="number" name="trainID" id="trainID" required><br>
        </div>
        <div>
            <label for="trainName">TrainName</label><br>
            <input type="text" name="trainName" id="trainName" required><br>
        </div>
        <input type="submit" value="Submit" name="btnSubmit">
    </form>
</body>
</html>