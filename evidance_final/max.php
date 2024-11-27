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
            <h1>Type Your Number</h1>
            <label for="">Number 1:</label>
            <input type="text" name="number1">
            <br>
            <label for="">Number 2:</label>
            <input type="text" name="number2">
            <br>
            <label for="">Number 3:</label>
            <input type="text" name="number3">
            <br>
            <input type="submit" name="Submit">
        </form>
    </section>
            <?php
            $n1= $_POST['number1'];
            $n2= $_POST['number2'];
            $n3= $_POST['number3'];

            if($n1>$n2 && $n1>$n3){
                    echo "Number 1 is Max $n1";
            }
            elseif($n2>$n3 && $n2>$n1){
                 echo "Number 2 is Max $n2";
            }
            else{
                 echo "Number 3 is Max $n3";
            }
            ?>
</body>
</html>