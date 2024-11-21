<?php 
require_once "personOne.php";
require_once "personTwo.php";
require_once "personThree.php";

use hello\Darling;
use hi\Darling as Sweet;
use bye\Janina;

$obj = new Darling();
$obj->jan();

$obj = new Sweet();
$obj->jan();

$obj = new Janina();
$obj->jan();

?>