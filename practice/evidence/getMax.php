<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <section>
            <form action="" method="post">
                <h3>Type Intiger Value</h3>
                    <div>
                            <input type="text" name="number_a">
                                <input type="text" name="number_b">
                                <input type="text" name="number_c">
                        <input type="submit" value="Submit">
                    </div>
            </form>
        </section>

        <?php
        $inputNumber1= $_POST["number_a"];
        $inputNumber2= $_POST["number_b"];
        $inputNumber3= $_POST["number_c"];
        if($inputNumber1>$inputNumber2 && $inputNumber1>$inputNumber3){
            echo "inputNumber1 is max $inputNumber1";
        }
        elseif($inputNumber2>$inputNumber3 && $inputNumber2>$inputNumber1){
            echo "inputNumber2 is max $inputNumber2";
        }
        else{
             echo "inputNumber3 is max $inputNumber3";
        }

        ?>
</body>
</html>