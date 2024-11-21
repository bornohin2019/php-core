<?php
class Watchinput{
private $watch;
function __construct($nameWatch){
    echo $this->watch=$nameWatch;
}

public function totalPrice(){
    echo "Nevy Force";
}
}

$getCalculet= new Watchinput("It's ");
$getCalculet->totalPrice();
?>