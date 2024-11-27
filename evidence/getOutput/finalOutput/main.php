<?php
require_once('myClass.php');
if(isset($_POST['btnSubmit'])){
$id= $_POST['myId'];
$name= $_POST['myName'];
$batch= $_POST['myBatch'];


$myObj= new Trinee($id,$name,$batch);
$myObj-> save();

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<body>
    <section>
        <form action="" method="post">
     <h1>Filup your Information</h1>
    <label for="">Trinee ID:</label>
    <input type="text" name="myId">
    <label for="">Trinee Name:</label>
    <input type="text" name="myName">
    <label for="">Batch:</label>
    <input type="text" name="myBatch">
    <input type="submit" value="Submit" name="btnSubmit">

        </form>
    </section>
    <?php
    Trinee :: display();
    ?>
</body>
</html>