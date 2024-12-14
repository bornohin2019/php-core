<?php
require_once('myClass.php');
if(isset($_POST['btnSubmit'])){
$id=$_POST['myId'];
$name=$_POST['myName'];
$batch=$_POST['myBatch'];

$myObj= new Trinee($id,$name,$batch);
$myObj->save();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getInformation</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <h1>Filup Your Information</h1>
            <label for="">Trinee Id:</label>
            <input type="text" name="myId">
            <br>
            <label for="">Trinee Name:</label>
            <input type="text" name="myName">
            <br>
            <label for="">Trinee Batch</label>
            <input type="text" name="myBatch">
            <br>
            <input type="submit" value="Submit" name="btnSubmit">
            <?php
            Trinee:: display();
            ?>
        </form>
    </section>
</body>
</html>