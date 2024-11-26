<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getMax</title>
</head>
<body>
     <section>
        <form action="" method="post">
        <h3>Type Intiger Value</h3>
        <input type="text" name="number">
        <input type="text" name="number1">
        <input type="text" name="number2">
        <input type="submit" value="Submit">
        </form>
     </section>
     <?php
if($_POST){
$n1= $_POST['number'];
$n2= $_POST['number1'];
$n3= $_POST['number2'];

if($n1>$n2 && $n1>$n3){
echo "number is max $n1";
}
elseif($n2>$n3 && $n2>$n1){
echo "number 1 is max $n2";
}
else{
echo "number 2 is max $n3";
}
}

?>
</body>
</html>

