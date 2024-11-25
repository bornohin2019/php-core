<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <section>
    <form action="" method="post">
        <h3>Enter Intiger Number</h3>
        <input type="text" name="number" id="number">
        <input type="submit" value="Submit">
    </form>
    </section>
</body>
</html>
<?php
$number =$_POST['number'];
$fact=1;

if($number ==0 || $number==1){
    echo "$number factorial is 1";
}
else{
    for($i=2; $i<= $number; $i++){
        $fact = $fact *$i;
    }
    echo "$number factorial is $fact";
    echo "<br><br>";
}
?>