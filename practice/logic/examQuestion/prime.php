<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <div>
                <label for="">Type A Valid Number : </label>
                <input type="text" name="number">
                <input type="submit" name="submit">
            </div>
        </form>
        <?php
    if($_POST){
        $num = $_POST['number'];
        $isPrime= true ;

        if($num == 0 || $num == 1){
            echo "Prime Number Start Atlist 2";
        }
        else{
            for($i=2; $i<$num; $i++){
                if($num % $i == 0){
                    $isPrime = false ;
                } 
            }
            if($isPrime == true){
                echo "$num It's Prime";
            }
            else{
               echo "$num Is Not Prime";
            }
        }

    }


        ?>



    </section>
</body>
</html>