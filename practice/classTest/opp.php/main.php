<?php
require_once("student.php");
if(isset($_POST["btnSubmit"])){
    $id = $_POST["txtID"];
    $name= $_POST["txtName"];

    $student= new Student($id,$name);
    $student->save();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <section>
        <form action="#" method="post">
            <div>
                <label for="id">ID :</label>
                <input type="text" name="txtID">
            </div>
            <br>
            <div>
                <label for="name">NAME :</label>
                <input type="text" name="txtName">
            </div>
            <div>
                <input type="submit" value="Submit" name="btnSubmit">
            </div>
        </form>
    </section>
    <?php
    Student:: displayData();
    
    ?>
</body>
</html>