<?php
abstract class Information{
    abstract public function bornohin();
    public function karli(){
        echo "public function";
    }
}

$myObject= new Information();
$myObject->bornohin();






?>