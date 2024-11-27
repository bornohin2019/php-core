<?php
require_once "myClass.php";

if(isset($_POST['btnSubmit'])){
   $id= $_POST['trainId'];
   $name= $_POST['trainName'];

   $traineeinformation = new Trainee($id,$name);
   $traineeinformation->save();
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getData</title>
</head>
<body>
    <section>
        <form action="#" method="post">
            <div>
                <label for="">Trainee ID :</label>
                <input type="text" name="trainId">
            </div>
            <div>
                <label for="">Trainee Name :</label>
                <input type="text" name="trainName">
            </div>
            <div>
                <input type="submit" value="Submit" name="btnSubmit">
            </div>
        </form>
    </section>
            <?php
                Trainee::display();
            ?>
</body>
</html>