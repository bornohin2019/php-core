<?php
// $num = 5;
$count = 0;
if($_GET) {
    $number = $_GET['number']; 
for($i = 1; $i < $number; $i++) {
    if($number % 2 === 0) {
        $count++;
        break;
    }
}

if($count === 0) {

    echo "$number  is prime number";
}
else {
    echo "$number  is not prime number";
}
}
?>