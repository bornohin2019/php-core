<?php
require_once("myClass.php");
if(isset($_POST['btnSubmit'])){
    $id = $_POST['myId'];
    $name= $_POST[myName];
}

$myObj = new Trainee($id,$name);
$myObj= save();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>get-data</title>
</head>
<body>
    <section>
        <form action="" method="post"></form>
        <h1>Filup Your  Information</h1>
        <input type="text" name="myId">
        <input type="text" name="myName">
        <input type="submit" value="Submit" name="btnSubmit">
    </section>
    <?php
    Trainee::display();
    ?>
</body>
</html>