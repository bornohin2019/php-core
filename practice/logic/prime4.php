<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter A Number:</label>
        <input type="text" name="number">
        <input type="submit" name="Submit">
    </form>

<?php
if($_POST){
    $num = $_POST['number'];
    $isPrime = true ;

    if($num==0 || $num==1){
        echo "0 and 1 are not prime number";
    }
    else{
        for($i=2; $i < $num; $i++){
            if($num % $i == 0){
                $isPrime = false ;
            }
        }
            if($isPrime == true){
                echo "$num  A Prime Number ";
            }
            else{
                echo "$num Not A Prime Number";
            }
        
    }

}



?>

</body>
</html>