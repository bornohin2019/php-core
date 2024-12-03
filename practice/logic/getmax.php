<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getMax</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="number">
<input type="text" name="number2">
<input type="text" name="number3">
<input type="submit" name="Submit">


</form>
<?php
$i1=$_POST['number'];
$i2=$_POST['number2'];
$i3=$_POST['number3'];
if($i1>$i2 && $i1>$i3){
    echo "i1 It's Large $i1";
}
elseif($i2>$i3 && $i2=$i1){
    echo "i2 It's Large $i2";
}
else{
    echo "i3 It's Large $i3";
}


?>
</body>
</html>