<?php
class Cycle{
    public $name;
    public $hight;

    // function __construct(){
    //     echo "this is construct function";
    // }
    //  function __construct($myName,$myHight){
    //    $this->name=$myName;
    //     $this->hight=$myHight;
    //     echo "this is cycle class <br>";
    // }
    function set_name(){
        echo "THIS IS USER-DEFINE FUNCTION";
    }

    function set_anoter(){
        echo 'this is anoter user-define function';
    }
}

// $myObj= new Cycle("Rabbani Mia","5.4");
// echo $myObj->name;
// echo $myObj->size;

// echo $myObj->set_name();

// inheritance Cycle class to Bike class 
class Bike extends Cycle{
    public $name="BMW";
    public $color;

    function __destruct(){
        echo"bye";
    }
    function __construct($myName,$mySize,$myColor){
    //    $this->name=$myName;
    //     $this->size=$mySize;
    //     $this->color=$myColor;
    echo"hello<br>";
       
    }
    function info(){
        
        echo"work<br>";
    }
}

$bikeObj= new Bike("rabbani <br>","5.4' <br>","blue");
$bikeObj->info();
echo Bike::$name;
// echo $bikeObj->name;
// echo $bikeObj->size;
// echo $bikeObj->color;

?>