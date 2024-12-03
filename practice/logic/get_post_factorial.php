
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
<input type="text" name="number">
<input type="submit" name="Submit">


</form>
<?php
if($_GET){
    $fact=1;
    $number = $_GET['number'];
    echo "Factorial of $number::<br><br>";
    for ($i= 1; $i<=$number; $i++){
        $fact= $fact * $i;
    }
    echo $fact . "<br>";
        }
    ?>
</body>
</html>

