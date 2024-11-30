<?php session_start();
if(isset($_POST['btnSubmit'])){
    $id = $_POST['trainID'];
    $name = $_POST['trainName'];


    if($id=="100" && $name=="Badon"){
        $_SESSION['rname']=$name;
        header("location:demo.php");
    }
    else{
        $msg="eror";
    }

}

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Form</title>
</head>
<body>
    <?php 
        echo (isset($msg)?$msg:"");
    ?>
    <form action="#" method="post">
        <div>
            <label for="id">TrainID</label><br>
            <input type="number" name="trainID" id=""><br>
        </div>
        <div>
            <label for="id">TrainName</label><br>
            <input type="text" name="trainName" id=""><br>
        </div>
        <input type="submit" value="Submit" name="btnSubmit">
        <a href="logout.php">Logout</a>
    </form>
</body>
</html>