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
            <h3>Type Your Number</h3>
        <input type="text" name="number">
        <input type="submit" value="Submit">
        </form>
     </section>
</body>
</html>

<?php
$number = $_POST['number'];
$fact= 1;

if($number<0){
    echo "$number enter +ve number";
}
else{
    for($i=2; $i<=$number; $i++){
        $fact *= $i;
    }
    echo "$number is factoril $fact";
}
?>