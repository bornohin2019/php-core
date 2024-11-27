<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get-Max</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <h1>Type Valid Number</h1>
            <input type="text" name="number1">
            <input type="text" name="number2">
            <input type="text" name="number3">
            <input type="submit" value="Submit">
        </form>
    </section>
    <?php
           $i1=$_POST["number1"];
           $i2=$_POST["number2"];
           $i3=$_POST["number3"];

           if($i1>$i2 && $i1>$i3){
            echo "number 1 is Max $i1";
           }
           elseif($i2>$i3 && $i2>$i1){
            echo "number2 is max $i2";
           }
           else{
            echo "number 3 is max $i3";
           }

    ?>
</body>
</html>