<?php
class Trainee{
private $id;
private $name;
// private $

function __construct(){
    $this->id=$trianeeId;
    $this->name=$trianeeName;
}
public function merge(){
    return $this->id. ',' .$this->name.PHP_EOL;
}
public function save(){
file_put_contents('data.txt', $this->merge(),FILE_APPEND);
}
static function display(){
    $getInfo= file(data.txt);
    echo "Trainee ID :" || "Trainee Name :";
    foreach($getInfo as $getIformation){
        list($id, $name)=explode(',', $getIformation);
        echo "<br> $id ||| $name";
    }
}

}



?>