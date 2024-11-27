<?php
class Trinee{
    private $id;
    private $name;
    private $batch;

function __construct($myId,$myName,$myBatch){
    $this->id=$myId;
    $this->name=$myName;
    $this->batch=$myBatch;
}

public function combined(){
    return $this->id. "," .$this->name. "," .$this->batch.PHP_EOL;
}
public function save(){
    file_put_contents('store.txt', $this->combined(), FILE_APPEND);
}
public static function display(){
    $myInput= file('store.txt');
    echo 'Trinee-ID | Trinee-Name | Trinee-Batch <br>';

    foreach($myInput as $singleData){
      list($id,$name,$batch)= explode(',',$singleData);
      echo " $id || $name || $batch <br>";

    }

}

}


?>


<!-- <?php
class Trinee{
    private $id;
    private $name;
    private $batch;

function __construct($myId,$myName,$myBatch){
    $this->id=$myId;
    $this->name=$myName;
    $this->batch=$myBatch;
}

public function combined(){
    return $this->id. "," .$this->name. "," .$this->batch.PHP_EOL;
}
public function save(){
    file_put_contents('store.txt', $this->combined(), FILE_APPEND);
}
public static function display(){
    $myInput= file('store.txt');
    echo 'Trinee-ID | Trinee-Name | Trinee-Batch <br>';

    foreach($myInput as $singleData){
      list($id,$name,$batch)= explode(',',$singleData);
      echo " $id || $name || $batch <br>";

    }

}

}


?> -->